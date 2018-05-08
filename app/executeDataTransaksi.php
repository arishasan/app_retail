<?php

namespace App;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
date_default_timezone_set('Asia/Jakarta');

class executeDataTransaksi extends Model
{

	static function getNoPembelian(){
		$akhir = '';
		$inisial = "PEM";
		$data = DB::table('pembelian')->select('kode_pembelian')->get();
		$arr = $data->toArray();
		foreach ($arr as $key => $value) {
			$akhir = $value->kode_pembelian;
		}
		$noUrutTerakhir = $akhir;
		$lastDBUrut = substr($noUrutTerakhir,3,5);
		$nextNoUrut = $lastDBUrut+1;

		$final = $inisial.sprintf('%05d',$nextNoUrut);

		return $final;
	}

	static function getDetNoPembelian(){
		$akhir = '';
		$inisial = "DPM";
		$data = DB::table('detail_pembelian')->select('kode_det_pembelian')->get();
		$arr = $data->toArray();
		foreach ($arr as $key => $value) {
			$akhir = $value->kode_det_pembelian;
		}
		$noUrutTerakhir = $akhir;
		$lastDBUrut = substr($noUrutTerakhir,3,5);
		$nextNoUrut = $lastDBUrut+1;

		$final = $inisial.sprintf('%05d',$nextNoUrut);

		return $final;
	}

	static function getNoTransaksiPenjualanPARENT(){
		date_default_timezone_set('Asia/Jakarta');
		$akhir = '';
		$inisial = "PJ";
		$tanggal = date('Ymd');
		$data = DB::table('penjualan')->select('kode_penjualan')->get();
		$arr = $data->toArray();
		foreach ($arr as $key => $value) {
			$akhir = $value->kode_penjualan;
		}
		$noUrutTerakhir = $akhir;
		$lastDBUrut = substr($noUrutTerakhir,10,5);
		$nextNoUrut = $lastDBUrut+1;

		$final = $inisial.$tanggal.sprintf('%05d',$nextNoUrut);

		return $final;
	}

	static function getNoOtomatisDetPenjualan($kode,$key){
		$kodeAwal = $kode;
		$arr = $key;

		$lastNOUrut = substr($kodeAwal,15,3);
		$nextNoUrut = $lastNOUrut+1+$arr;

		$final = $kodeAwal.sprintf('%03s',$nextNoUrut);

		return $final;
	}

	static function executePenjualanNOW($input){
		date_default_timezone_set('Asia/Jakarta');
		$date = date('Y-m-d');
		$user = AUTH::id();
		$noOtomatisPARENT_TUNAI = \App\executeDataTransaksi::getNoTransaksiPenjualanPARENT();
		try {

			$query1 = DB::table('penjualan')
						->insert([
							'kode_penjualan' => $noOtomatisPARENT_TUNAI,
							'kode_pelanggan' => $input['kode_pelanggan'],
							'tgl_penjualan' => $date,
							'status' => 'BELUM LUNAS',
							'tipe_pembayaran' => $input['tipe_pembayaran'],
							'diskon' => $input['diskon'],
							'pajak' => $input['pajak'],
							'total_bayar' => $input['totBayar'],
							'id_user' => $user,
						]);

			foreach ($input['kode'] as $key => $value) {

				$query2 = DB::table('detail_penjualan')
						->insert([
							'kode_det_penjualan' => \App\executeDataTransaksi::getNoOtomatisDetPenjualan($noOtomatisPARENT_TUNAI,$key),
							'kode_penjualan' => $noOtomatisPARENT_TUNAI,
							'kode_produk' => $value,
							'nama_produk' => $input['nama'][$key],
							'harga_jual' => $input['harga'][$key],
							'qty' => $input['qty'][$key],
							'subtotal' => $input['subTotal2'][$key],
						]);
			}

			DB::table('activities')
	    	->insert([
	    		'activity' => 'Melakukan transaksi penjualan produk ke pelanggan',
	    		'waktu' => date('Y-m-d H:i:s'),
	    		'parent' => 'Transaksi',
	    		'id_user' => AUTH::id()
	    	]);

			return $noOtomatisPARENT_TUNAI;
		} catch (Exception $e) {
			return '';
		}

	}

    static function executePembelianNow($input){
    	date_default_timezone_set('Asia/Jakarta');
    	$date = date('Y-m-d');
    	$kode = \App\executeDataTransaksi::getNoPembelian();
    	try {
    		$query = DB::table('pembelian')
    			->insert([
    				'kode_pembelian' => $kode,
    				'tgl_pembelian' => $date,
    				'kode_produsen' => $input['produsen']
    			]);

    			foreach ($input['kode'] as $key => $value) {
    				$query2 = DB::table('detail_pembelian')
    					->insert([
    						'kode_det_pembelian' => \App\executeDataTransaksi::getDetNoPembelian(),
    						'kode_pembelian' => $kode,
    						'kode_produk' => $value,
    						'jumlah' => $input['qty'][$key]
    					]);
    			}

    			DB::table('activities')
		    	->insert([
		    		'activity' => 'Melakukan transaksi pembelian produk ke produsen',
		    		'waktu' => date('Y-m-d H:i:s'),
		    		'parent' => 'Transaksi',
		    		'id_user' => AUTH::id()
		    	]);
    			return true;

    	} catch (Exception $e) {
    			return false;
    	}

    }



}

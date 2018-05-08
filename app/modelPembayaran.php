<?php

namespace App;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
date_default_timezone_set('Asia/Jakarta');

class modelPembayaran extends Model
{

	static function getNOPembayaran(){
		date_default_timezone_set('Asia/Jakarta');
		$akhir = '';
		$inisial = "PB";
		$tanggal = date('Ymd');
		$data = DB::table('pembayaran')->select('no_pembayaran')->get();
		$arr = $data->toArray();
		foreach ($arr as $key => $value) {
			$akhir = $value->no_pembayaran;
		}
		$noUrutTerakhir = $akhir;
		$lastDBUrut = substr($noUrutTerakhir,10,5);
		$nextNoUrut = $lastDBUrut+1;

		$final = $inisial.$tanggal.sprintf('%05d',$nextNoUrut);

		return $final;
	}

	static function getCicilanKode($kode){
		$akhir = '';
		$kodeAwal = $kode;
		$data = DB::table('cicilan')->where('no_pembayaran',$kodeAwal)->select('kode_cicilan')->get();
		$arr = $data->toArray();
		foreach ($arr as $key => $value) {
			$akhir = $value->kode_cicilan;
		}
		$noUrutTerakhir = $akhir;
		$lastDBUrut = substr($noUrutTerakhir,15,3);
		$nextNoUrut = $lastDBUrut+1;

		$final = $kodeAwal.sprintf('%03s',$nextNoUrut);

		return $final;
	}

	static function getUrutanCicilanBYID($kode){
		$lastKode = $kode;
		$data = DB::table('cicilan')
					->select('*')
					->where('no_pembayaran',$kode)
					->get();
		$count = count($data->toArray());

		return $count+1;
	}

	static function executeKREDIT($input){

		try {
			
			date_default_timezone_set('Asia/Jakarta');
	    	$tanggal = date('Y-m-d');
	    	$noOtomatis = \App\modelPembayaran::getNOPembayaran();

			$check = DB::table('pembayaran')
	    			->select('*')
	    			->where('tipe_pembayaran','Kredit')
	    			->where('kode_penjualan',$input['kode_penjualan'])
	    			->get();

	    	$data = $check->toArray();


	    	if(count($data) == 0){

	    		$queryINS = DB::table('pembayaran')
			    			->insert([
			    				'no_pembayaran' => $noOtomatis,
			    				'kode_penjualan' => $input['kode_penjualan'],
			    				'tgl_bayar' => $tanggal,
			    				'tipe_pembayaran' => $input['tipe'],
			    				'jumlah_bayar' => $input['diBayar'],
			    				'id_user' => AUTH::id()
			    			]);

			    $queryINSSecond = DB::table('cicilan')
			    				 ->insert([
			    				 	'kode_cicilan' => \App\modelPembayaran::getCicilanKode($noOtomatis),
			    				 	'no_pembayaran' => $noOtomatis,
			    				 	'tgl_cicilan' => $tanggal,
			    				 	'kode_pelanggan' => $input['kode_pelanggan'],
			    				 	'jumlah_cicilan' => $input['diBayar'],
			    				 	'cicilan_ke' => \App\modelPembayaran::getUrutanCicilanBYID($noOtomatis)
			    				 ]);

			    if($input['sudahBayarOnBOX'] - $input['diBayar'] == 0){
				$queryUPDATE = DB::table('penjualan')
								->where('kode_penjualan',$input['kode_penjualan'])
								->update([
									'status' => 'LUNAS'
								]);
				}

	    	}else{

	    		$resl = DB::table('pembayaran')
	    				->select('*')
	    				->where('kode_penjualan',$input['kode_penjualan'])
	    				->get();

	    		$dataStuffed = $resl->toArray();

	    		foreach ($dataStuffed as $key => $value) {
	    			$code = $value->no_pembayaran;
	    			$acisAyeuna = $value->jumlah_bayar;
	    		}


	    		$queryINSLAST = DB::table('pembayaran')
	    					->where('no_pembayaran',$code)
			    			->update([
			    				'kode_penjualan' => $input['kode_penjualan'],
			    				'tgl_bayar' => $tanggal,
			    				'tipe_pembayaran' => $input['tipe'],
			    				'jumlah_bayar' => $acisAyeuna + $input['diBayar'],
			    				'id_user' => AUTH::id()
			    			]);

			    $queryINSSecondLAST = DB::table('cicilan')
			    				 ->insert([
			    				 	'kode_cicilan' => \App\modelPembayaran::getCicilanKode($code),
			    				 	'no_pembayaran' => $code,
			    				 	'tgl_cicilan' => $tanggal,
			    				 	'kode_pelanggan' => $input['kode_pelanggan'],
			    				 	'jumlah_cicilan' => $input['diBayar'],
			    				 	'cicilan_ke' => \App\modelPembayaran::getUrutanCicilanBYID($code)
			    				 ]);

			    if($input['sudahBayarOnBOX'] - $input['diBayar'] == 0){
				$queryUPDATE = DB::table('penjualan')
								->where('kode_penjualan',$input['kode_penjualan'])
								->update([
									'status' => 'LUNAS'
								]);
				}

	    	}

	    	DB::table('activities')
	    	->insert([
	    		'activity' => 'Melakukan transaksi pembayaran secara kredit',
	    		'waktu' => date('Y-m-d H:i:s'),
	    		'parent' => 'Transaksi',
	    		'id_user' => AUTH::id()
	    	]);

			return true;
		} catch (Exception $e) {
			return false;
		}

	}
    
    static function executeTUNAI($input){

    	$check = DB::table('penjualan')
    			->select('*')
    			->where('status','BELUM LUNAS')
    			->where('tipe_pembayaran','Tunai')
    			->where('kode_penjualan',$input['kode_penjualan'])
    			->get();

    	foreach ($check->toArray() as $key => $value) {
    		$totalBayar = $value->total_bayar;
    	}

    	if($input['diBayar'] == $totalBayar){
    		$queryUPD = DB::table('penjualan')
    					->where('kode_penjualan',$input['kode_penjualan'])
    					->update([
    						'status' => 'LUNAS'
    					]);
    	}

    	date_default_timezone_set('Asia/Jakarta');
    	$tanggal = date('Y-m-d');
    	$noOtomatis = \App\modelPembayaran::getNOPembayaran();
    	$query1 = DB::table('pembayaran')
    			->insert([
    				'no_pembayaran' => $noOtomatis,
    				'kode_penjualan' => $input['kode_penjualan'],
    				'tgl_bayar' => $tanggal,
    				'tipe_pembayaran' => $input['tipe'],
    				'jumlah_bayar' => $input['diBayar'],
    				'id_user' => AUTH::id()
    			]);

    	DB::table('activities')
	    	->insert([
	    		'activity' => 'Melakukan transaksi pembayaran secara tunai',
	    		'waktu' => date('Y-m-d H:i:s'),
	    		'parent' => 'Transaksi',
	    		'id_user' => AUTH::id()
	    	]);

    	if($query1) return true;else return false; 
    }

}

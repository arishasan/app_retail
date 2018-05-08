<?php

namespace App;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
date_default_timezone_set('Asia/Jakarta');

class executeData extends Model
{

	static function getNoOtomatis(){
		$akhir = '';
		$inisial = "PEL";
		$data = DB::table('pelanggan')->select('kode_pelanggan')->get();
		$arr = $data->toArray();
		foreach ($arr as $key => $value) {
			$akhir = $value->kode_pelanggan;
		}
		$noUrutTerakhir = $akhir;
		$lastDBUrut = substr($noUrutTerakhir,3,5);
		$nextNoUrut = $lastDBUrut+1;

		$final = $inisial.sprintf('%05d',$nextNoUrut);

		return $final;
	}

	static function getNoOtomatisProdusen(){
		$akhir = '';
		$inisial = "PROD";
		$data = DB::table('produsen')->select('kode_produsen')->get();
		$arr = $data->toArray();
		foreach ($arr as $key => $value) {
			$akhir = $value->kode_produsen;
		}
		$noUrutTerakhir = $akhir;
		$lastDBUrut = substr($noUrutTerakhir,4,5);
		$nextNoUrut = $lastDBUrut+1;

		$final = $inisial.sprintf('%05d',$nextNoUrut);

		return $final;
	}

	static function getNoOtomatisProduk(){
		$akhir = '';
		$inisial = "PR";
		$data = DB::table('produk')->select('kode_produk')->get();
		$arr = $data->toArray();
		foreach ($arr as $key => $value) {
			$akhir = $value->kode_produk;
		}
		$noUrutTerakhir = $akhir;
		$lastDBUrut = substr($noUrutTerakhir,2,5);
		$nextNoUrut = $lastDBUrut+1;

		$final = $inisial.sprintf('%05d',$nextNoUrut);

		return $final;
	}

	static function insertDataProduk($input){
		date_default_timezone_set('Asia/Jakarta');
    	$tgl = date('Y-m-d');

    	foreach ($input['nama'] as $key => $value) {
    		$noOtomatis = \App\executeData::getNoOtomatisProduk();
	    	$query = DB::table('produk')
	    	->insert([
	    		'kode_produk' => $noOtomatis ,
	    		'tgl_pengisian' =>  $tgl,
	    		'nama' =>  $value,
	    		'jenis_produk' =>  $input['jenis'][$key],
	    		'harga_pokok' =>  $input['harga_pokok'][$key],
	    		'harga_jual' => $input['harga_jual'][$key],
	    		'stok' => $input['stok'][$key],
	    		'status' =>  $input['status'][$key],
	    		'keterangan' =>  $input['ket'][$key],
	    		'id_user' => AUTH::id()
	    	]);	
    	}

    	DB::table('activities')
    	->insert([
    		'activity' => 'Input Produk Baru',
    		'parent' => 'Data',
    		'waktu' => date('Y-m-d H:i:s'),
    		'id_user' => AUTH::id()
    	]);

    	if($query) return true; else false;
	}

	static function updateDataProduk($input){
		try {
			foreach ($input['kode'] as $key => $value) {
			$query = DB::table('produk')
					->where('kode_produk',$value)
					->update([
						'nama' =>  $input['namaProduk'][$key],
			    		'jenis_produk' =>  $input['jenis'][$key],
			    		'harga_pokok' =>  $input['harga_pokok'][$key],
			    		'harga_jual' =>  $input['harga_jual'][$key],
			    		'stok' =>  $input['stok'][$key],
			    		'status' =>  $input['status'][$key],
			    		'keterangan' =>  $input['ket'][$key],
			    		'id_user' => AUTH::id()
					]);
			}

			DB::table('activities')
	    	->insert([
	    		'activity' => 'Update Produk',
	    		'parent' => 'Data',
	    		'waktu' => date('Y-m-d H:i:s'),
	    		'id_user' => AUTH::id()
	    	]);

			return true;

		} catch (Exception $e) {
			return false;
		}
	}

	static function deleteProduk($input){

		try {
			
			foreach ($input['kode'] as $key => $value) {
			$query = DB::table('produk')
					->where('kode_produk',$value)
					->update([
						'status' => 'Non-Aktif',
						'keterangan' => 'Dihapus'
					]);
			}

			DB::table('activities')
	    	->insert([
	    		'activity' => 'Delete produk',
	    		'parent' => 'Data',
	    		'waktu' => date('Y-m-d H:i:s'),
	    		'id_user' => AUTH::id()
	    	]);

			return true;

		} catch (Exception $e) {
			return false;
		}
	}

	static function insertDataProdusen($input){
		date_default_timezone_set('Asia/Jakarta');
    	$tgl = date('Y-m-d');

    	foreach ($input['nama'] as $key => $value) {
    		$noOtomatis = \App\executeData::getNoOtomatisProdusen();
	    	$query = DB::table('produsen')
	    	->insert([
	    		'kode_produsen' => $noOtomatis ,
	    		'tgl_registrasi' =>  $tgl,
	    		'nama' =>  $value,
	    		'alamat' =>  $input['alamat'][$key],
	    		'email' =>  $input['email'][$key],
	    		'status' =>  $input['status'][$key],
	    		'keterangan' =>  $input['ket'][$key],
	    		'id_user' => AUTH::id()
	    	]);	
    	}

    	DB::table('activities')
	    	->insert([
	    		'activity' => 'Input Produsen Baru',
	    		'parent' => 'Data',
	    		'waktu' => date('Y-m-d H:i:s'),
	    		'id_user' => AUTH::id()
	    	]);

    	if($query) return true; else false;
	}

	static function updateDataProdusen($input){
		try {
			foreach ($input['kode'] as $key => $value) {
			$query = DB::table('produsen')
					->where('kode_produsen',$value)
					->update([
						'nama' =>  $input['nama'][$key],
			    		'alamat' =>  $input['alamat'][$key],
			    		'email' =>  $input['email'][$key],
			    		'status' =>  $input['status'][$key],
			    		'keterangan' =>  $input['ket'][$key],
			    		'id_user' => AUTH::id()
					]);
			}

			DB::table('activities')
	    	->insert([
	    		'activity' => 'Update Produsen',
	    		'waktu' => date('Y-m-d H:i:s'),
	    		'parent' => 'Data',
	    		'id_user' => AUTH::id()
	    	]);

			return true;
		} catch (Exception $e) {
			return false;
		}
	}

	static function deleteDataProdusen($input){
		foreach ($input['kode'] as $key => $value) {
			$query = DB::table('produsen')
					->where('kode_produsen',$value)
					->update([
						'status' => 'Non-Aktif',
						'keterangan' => 'Dihapus'
					]);
		}

		DB::table('activities')
	    	->insert([
	    		'activity' => 'Delete produsen',
	    		'waktu' => date('Y-m-d H:i:s'),
	    		'parent' => 'Data',
	    		'id_user' => AUTH::id()
	    	]);
		if($query) return true; else false;
	}

	static function deletePelanggan($input){
		foreach ($input['id_pelanggan'] as $key => $value) {
			$query = DB::table('pelanggan')
					->where('kode_pelanggan',$value)
					->update([
						'status' => 'Non-Aktif',
						'keterangan' => 'Dihapus'
					]);
		}

		DB::table('activities')
	    	->insert([
	    		'activity' => 'Delete pelanggan',
	    		'waktu' => date('Y-m-d H:i:s'),
	    		'parent' => 'Data',
	    		'id_user' => AUTH::id()
	    	]);
		if($query) return true; else false;
	}

	static function updateDataPelanggan($input){
		try {
			foreach ($input['id_pelanggan'] as $key => $value) {
			$query = DB::table('pelanggan')
					->where('kode_pelanggan',$value)
					->update([
						'nama' =>  $input['nama'][$key],
			    		'alamat' =>  $input['alamat'][$key],
			    		'no_telp' =>  $input['telp'][$key],
			    		'email' =>  $input['email'][$key],
			    		'status' =>  $input['status'][$key],
			    		'keterangan' =>  $input['ket'][$key],
			    		'id_user' => AUTH::id()
					]);
			}
			DB::table('activities')
	    	->insert([
	    		'activity' => 'Update pelanggan',
	    		'waktu' => date('Y-m-d H:i:s'),
	    		'parent' => 'Data',
	    		'id_user' => AUTH::id()
	    	]);
			return true;
		} catch (Exception $e) {
			return false;
		}
	}

    static function insertDataPelanggan($input){
    	date_default_timezone_set('Asia/Jakarta');
    	$tgl = date('Y-m-d');

    	foreach ($input['nama'] as $key => $value) {
    		$noOtomatis = \App\executeData::getNoOtomatis();
	    	$query = DB::table('pelanggan')
	    	->insert([
	    		'kode_pelanggan' => $noOtomatis ,
	    		'tgl_registrasi' =>  $tgl,
	    		'nama' =>  $value,
	    		'alamat' =>  $input['alamat'][$key],
	    		'no_telp' =>  $input['telp'][$key],
	    		'email' =>  $input['email'][$key],
	    		'status' =>  $input['status'][$key],
	    		'keterangan' =>  $input['ket'][$key],
	    		'id_user' => AUTH::id()
	    	]);	
    	}
    	DB::table('activities')
	    	->insert([
	    		'activity' => 'Input Pelanggan Baru',
	    		'waktu' => date('Y-m-d H:i:s'),
	    		'parent' => 'Data',
	    		'id_user' => AUTH::id()
	    	]);

    	if($query) return true; else false;
    }
}

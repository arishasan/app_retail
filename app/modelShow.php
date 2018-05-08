<?php

namespace App;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class modelShow extends Model
{
    static function getListData(){
    	$query = DB::table('pelanggan')
    			->select('*')
                ->whereRaw('keterangan != "Dihapus"')
    			->get();

    	return $query->toArray();
    }

    static function getListUsers(){
        $query = DB::table('t_users')
                ->select('*')
                ->get();

        return $query->toArray();
    }

    static function getListDataPelanggan(){
        $query = DB::table('pelanggan')
                ->select('*')
                ->get();

        $data = $query->toArray();
        $data2 = json_decode(json_encode($data),true);
        return $data2;
    }

    static function getListDataProdusen(){
    	$query = DB::table('produsen')
    			->select('*')
                ->whereRaw('keterangan != "Dihapus"')
    			->get();

    	return $query->toArray();
    }

    static function getListDataProdusen_decode(){
        $query = DB::table('produsen')
                ->select('*')
                ->get();

        $data = $query->toArray();
        $data2 = json_decode(json_encode($data),true);
        return $data2;
    }

    static function getListDataProdusenSelect(){
        $query = DB::table('produsen')
                ->select('*')
                ->where('status','Aktif')
                ->get();

        return $query->toArray();
    }

    static function getDataPembelian(){
        $query = DB::table('pembelian')
                ->select('*')
                ->get();

        return $query->toArray();
    }

    static function getListDataProduk(){
        $query = DB::table('produk')
                ->select('*')
                ->whereRaw('keterangan != "Dihapus"')
                ->get();

        return $query->toArray();
    }

    static function getListDataProduk_decode(){
        $query = DB::table('produk')
                ->select('*')
                ->get();

        $data = $query->toArray();
        $data2 = json_decode(json_encode($data),true);
        return $data2;
    }

    static function getDataBarang(){
        $query = DB::table('produk')
                ->select('*')
                ->where('status','Aktif')
                ->get();

        return $query->toArray();
    }

    static function getListedCustomer(){
        $query = DB::table('pelanggan')
                ->select('*')
                ->where('status','Aktif')
                ->get();
        return $query->toArray();
    }

    static function getListedPenjualanWithName(){
        $query = DB::table('penjualan')
                ->join('pelanggan','penjualan.kode_pelanggan','=','pelanggan.kode_pelanggan')
                ->selectRaw('penjualan.*,pelanggan.nama')
                ->get();

        return $query->toArray();
    }
}

<?php

namespace App;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class homeModel extends Model
{
    static function getJumlahPelanggan(){
    	$query = DB::table('pelanggan')
    			->select('*')
    			->get();
    	return count($query->toArray());
    }

    static function getActivity(){
        $query = DB::table('activities')
                ->where('id_user',AUTH::id())
                ->select('*')
                ->limit('4')
                ->orderByRaw('no DESC')
                ->get();
        return $query->toArray();
    }

    static function getJumlahProdusen(){	
    $query = DB::table('produsen')
    			->select('*')
    			->get();
    	return count($query->toArray());
    }

    static function getJumlahProduk(){	
    $query = DB::table('produk')
    			->select('*')
    			->get();
    	return count($query->toArray());
    }

    static function getCountLogin(){
    	$query = DB::table('t_users')
    			->select('*')
    			->where('id_user',AUTH::id())
    			->get();

    	return $query->toArray();
    }

    static function getPendapatan(){
    	$query = DB::table('pembayaran')
    			->selectRaw('tgl_bayar,sum(jumlah_bayar) as recordPerHari')
    			->groupBy('tgl_bayar')
    			->get();
    	return $query->toArray();
    }

    static function getTodoByUser(){
        $query = DB::table('to_do')
                ->select('*')
                ->where('id_user',AUTH::id())
                ->orderByRaw('id DESC')
                ->limit('6')
                ->get();

        return $query->toArray();
    }
}

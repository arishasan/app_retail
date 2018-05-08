<?php

namespace App;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class modelLaporan extends Model
{
    static function getDataPenjualanByID($id){
    	$query = DB::table('penjualan')
    			->selectRaw('penjualan.*,pelanggan.nama as `nama_pelanggan`')
    			->join('pelanggan','penjualan.kode_pelanggan','=','pelanggan.kode_pelanggan')
    			->where('kode_penjualan',$id)
    			->get();

    	return $query->toArray();
    }

    static function getDetailPenjualanByID($id){
    	$query = DB::table('detail_penjualan')
    			->select('*')
    			->where('kode_penjualan',$id)
    			->get();

    	return $query->toArray();
    }

    static function pembelian(){
        $query = DB::table('pembelian')
                ->select('*')
                ->get();

        return $query->toArray();
    }

    static function penjualan(){
        $query = DB::table('penjualan')
                ->selectRaw('penjualan.*,pelanggan.nama as `nama_pelanggan`')
                ->join('pelanggan','penjualan.kode_pelanggan','=','pelanggan.kode_pelanggan')
                ->get();

        return $query->toArray();
    }

    static function penjualan_parent_all(){
        $query = DB::table('penjualan')
                ->selectRaw('penjualan.*,pelanggan.nama as `nama_pelanggan`')
                ->join('pelanggan','penjualan.kode_pelanggan','=','pelanggan.kode_pelanggan')
                ->get();

        return $query->toArray();
    }

    static function penjualan_parent_all_tanggal($tgl1,$tgl2){
        $query = DB::table('penjualan')
                ->selectRaw('penjualan.*,pelanggan.nama as `nama_pelanggan`')
                ->join('pelanggan','penjualan.kode_pelanggan','=','pelanggan.kode_pelanggan')
                ->whereRaw('penjualan.tgl_penjualan BETWEEN "'.$tgl1.'" AND "'.$tgl2.'"')
                ->get();

        return $query->toArray();
    }

    static function penjualan_parent_all_tanggal_decode($tgl1,$tgl2){
        $query = DB::table('penjualan')
                ->selectRaw('penjualan.*,pelanggan.nama as `nama_pelanggan`')
                ->join('pelanggan','penjualan.kode_pelanggan','=','pelanggan.kode_pelanggan')
                ->whereRaw('penjualan.tgl_penjualan BETWEEN "'.$tgl1.'" AND "'.$tgl2.'"')
                ->get();

        $data = $query->toArray();
        $data2 = json_decode(json_encode($data),true);
        return $data2;
    }

    static function penjualan_parent_all2(){
        $query = DB::table('penjualan')
                ->selectRaw('penjualan.*,pelanggan.nama as `nama_pelanggan`')
                ->join('pelanggan','penjualan.kode_pelanggan','=','pelanggan.kode_pelanggan')
                ->get();

        $data = $query->toArray();
        $data2 = json_decode(json_encode($data),true);
        return $data2;
    }

    static function penjualan_parent_id($id){
        $query = DB::table('penjualan')
                ->selectRaw('penjualan.*,pelanggan.nama as `nama_pelanggan`')
                ->join('pelanggan','penjualan.kode_pelanggan','=','pelanggan.kode_pelanggan')
                ->where('kode_penjualan',$id)
                ->get();

        return $query->toArray();
    }

    static function detail_penjualan_id($id){
        $query = DB::table('detail_penjualan')
                ->select('*')
                ->where('kode_penjualan',$id)
                ->get();

        return $query->toArray();
    }

    static function pembelian_parent($id){
        $query = DB::table('pembelian')
                ->selectRaw('pembelian.*,produsen.nama')
                ->join('produsen','pembelian.kode_produsen','=','produsen.kode_produsen')
                ->where('kode_pembelian',$id)
                ->get();

        return $query->toArray();
    }

    static function detail_pembelian($id){
        $query = DB::table('detail_pembelian')
                ->selectRaw('detail_pembelian.*,produk.nama')
                ->join('produk','detail_pembelian.kode_produk','=','produk.kode_produk')
                ->where('kode_pembelian',$id)
                ->get();

        return $query->toArray();
    }

    static function pembelian_parent_all(){
        $query = DB::table('pembelian')
                ->selectRaw('pembelian.*,produsen.nama')
                ->join('produsen','pembelian.kode_produsen','=','produsen.kode_produsen')
                ->get();

        return $query->toArray();
    }

    static function pembelian_parent_tanggal_all($tgl1,$tgl2){
        $query = DB::table('pembelian')
                ->selectRaw('pembelian.*,produsen.nama')
                ->join('produsen','pembelian.kode_produsen','=','produsen.kode_produsen')
                ->whereRaw('pembelian.tgl_pembelian BETWEEN "'.$tgl1.'" AND "'.$tgl2.'"')
                ->get();

        return $query->toArray();
    }

    static function pembelian_parent_all_tanggal_decode($tgl1,$tgl2){
        $query = DB::table('pembelian')
                ->selectRaw('pembelian.*,produsen.nama')
                ->join('produsen','pembelian.kode_produsen','=','produsen.kode_produsen')
                ->whereRaw('pembelian.tgl_pembelian BETWEEN "'.$tgl1.'" AND "'.$tgl2.'"')
                ->get();

        $data = $query->toArray();
        $data2 = json_decode(json_encode($data),true);
        return $data2;
    }

    static function pembelian_parent_all2(){
        $query = DB::table('pembelian')
                ->selectRaw('pembelian.*,produsen.nama')
                ->join('produsen','pembelian.kode_produsen','=','produsen.kode_produsen')
                ->get();
        $data = $query->toArray();
        $data2 = json_decode(json_encode($data),true);
        return $data2;
    }

}

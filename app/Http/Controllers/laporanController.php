<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Auth;

class laporanController extends Controller
{
    public function pembelian(){
    	$data['listLaporan'] = \App\modelLaporan::pembelian();
    	return view('laporan/pembelian')->with($data);
    }

    public function penjualan(){
    	$data['listLaporan'] = \App\modelLaporan::penjualan();
    	return view('laporan/penjualan')->with($data);
    }

    public function cetakPelanggan($type){
                date_default_timezone_set('Asia/Jakarta');date_default_timezone_set('Asia/Jakarta');
        DB::table('activities')
            ->insert([
                'activity' => 'Export laporan pelanggan',
                'waktu' => date('Y-m-d H:i:s'),
                'parent' => 'Laporan',
                'id_user' => AUTH::id()
            ]);

        $data = \App\modelShow::getListDataPelanggan();

        return Excel::create('data_pelanggan',function($excel) use ($data) {
            $excel->sheet('MySheet',function($sheet) use ($data){
                $sheet->fromArray($data);
            });
        })->download($type);

    }

    public function cetakProdusen($type){
        date_default_timezone_set('Asia/Jakarta');
        DB::table('activities')
            ->insert([
                'activity' => 'Export laporan produsen',
                'waktu' => date('Y-m-d H:i:s'),
                'parent' => 'Laporan',
                'id_user' => AUTH::id()
            ]);

        $data = \App\modelShow::getListDataProdusen_decode();

        return Excel::create('data_produsen',function($excel) use ($data) {
            $excel->sheet('MySheet',function($sheet) use ($data){
                $sheet->fromArray($data);
            });
        })->download($type);

    }

    public function cetakProduk($type){
        date_default_timezone_set('Asia/Jakarta');
        DB::table('activities')
            ->insert([
                'activity' => 'Export laporan produk',
                'waktu' => date('Y-m-d H:i:s'),
                'parent' => 'Laporan',
                'id_user' => AUTH::id()
            ]);

        $data = \App\modelShow::getListDataProduk_decode();

        return Excel::create('data_produk',function($excel) use ($data) {
            $excel->sheet('MySheet',function($sheet) use ($data){
                $sheet->fromArray($data);
            });
        })->download($type);

    }

    public function cetakALLPenjualan(){
    	$data['dataPenjualanPARENT'] = \App\modelLaporan::penjualan_parent_all();
    	$data['tgl1'] = '';
    	$data['tgl2'] = '';
    	return view('mockup/laporan_penjualan_all')->with($data);
    }

    public function cetak_det_penjualan($id){
    	$data['dataPenjualanPARENT'] = \App\modelLaporan::penjualan_parent_id($id);
    	$data['dataDetailpenjualan'] = \App\modelLaporan::detail_penjualan_id($id);
    	return view('mockup/laporan_penjualan')->with($data);
    }

    public function cetakPembelianExecute($id){
    	$data['dataPembelianPARENT'] = \App\modelLaporan::pembelian_parent($id);
    	$data['detailPembelian'] = \App\modelLaporan::detail_pembelian($id);

    	return view('mockup/laporan_pembelian')->with($data);
    }

    public function cetakALLPembelian(){
    	$data['event1'] = '';
    	$data['event2'] = '';
    	$data['dataPembelianPARENT'] = \App\modelLaporan::pembelian_parent_all();
    	return view('mockup/laporan_pembelian_all')->with($data);
    }

    public function reportPembelianTanggal($event,$event2){
    	$data['event1'] = $event;
    	$data['event2'] = $event2;
    	$data['dataPembelianPARENT'] = \App\modelLaporan::pembelian_parent_tanggal_all($event,$event2);
    	return view('mockup/laporan_pembelian_all')->with($data);
    }

    public function exportExcelPenjualanALL($type){
    	$datapenjualan = \App\modelLaporan::penjualan_parent_all2();

    	return Excel::create('laporan_penjualan',function($excel) use ($datapenjualan) {
    		$excel->sheet('MySheet',function($sheet) use ($datapenjualan){
    			$sheet->fromArray($datapenjualan);
    		});
    	})->download($type);

    }

    public function exportExcelPembelianALL($type){
    	$dataPembelianPARENT = \App\modelLaporan::pembelian_parent_all2();

    	return Excel::create('laporan_pembelian',function($excel) use ($dataPembelianPARENT) {
    		$excel->sheet('MySheet',function($sheet) use ($dataPembelianPARENT){
    			$sheet->fromArray($dataPembelianPARENT);
    		});
    	})->download($type);

    }

    public function reportPenjualanTanggal($event,$event2){
    	$data['dataPenjualanPARENT'] = \App\modelLaporan::penjualan_parent_all_tanggal($event,$event2);
    	$data['tgl1'] = $event;
    	$data['tgl2'] = $event2;
    	return view('mockup/laporan_penjualan_all')->with($data);
    }

    public function reportPenjualanTanggalExcel($event,$event2,$type){
        date_default_timezone_set('Asia/Jakarta');
        DB::table('activities')
            ->insert([
                'activity' => 'Export laporan penjualan berdasarkan tanggal',
                'waktu' => date('Y-m-d H:i:s'),
                'parent' => 'Laporan',
                'id_user' => AUTH::id()
            ]);

    	$dataPenjualanPARENT = \App\modelLaporan::penjualan_parent_all_tanggal_decode($event,$event2);

    	return Excel::create('laporan_penjualan',function($excel) use ($dataPenjualanPARENT) {
    		$excel->sheet('MySheet',function($sheet) use ($dataPenjualanPARENT){
    			$sheet->fromArray($dataPenjualanPARENT);
    		});
    	})->download($type);

    }

    public function reportPembelianTanggalExcel($event,$event2,$type){
        date_default_timezone_set('Asia/Jakarta');
        DB::table('activities')
            ->insert([
                'activity' => 'Export laporan pembelian berdasarkan tanggal',
                'waktu' => date('Y-m-d H:i:s'),
                'parent' => 'Laporan',
                'id_user' => AUTH::id()
            ]);

    	$dataPembelianParent = \App\modelLaporan::pembelian_parent_all_tanggal_decode($event,$event2);

    	return Excel::create('laporan_pembelian',function($excel) use ($dataPembelianParent) {
    		$excel->sheet('MySheet',function($sheet) use ($dataPembelianParent){
    			$sheet->fromArray($dataPembelianParent);
    		});
    	})->download($type);

    }

}

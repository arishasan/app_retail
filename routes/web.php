<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::auth();

Route::group(['middleware' => 'auth'],function(){
	Route::get('/','homeController@index');
	Route::get('data/pelanggan','dataController@pelanggan');
	Route::get('data/produsen','dataController@produsen');
	Route::get('data/produk','dataController@produk');

	Route::get('transaksi/pembelian','transaksiController@pembelian');
	Route::get('getDataPembelian','transaksiController@getAllRecordPembelian');
	
	Route::get('cekUsage','homeController@usageCek');

	Route::get('transaksi/penjualan','transaksiController@penjualan');
	Route::get('transaksi/pembayaran','transaksiController@pembayaran');
	Route::get('notaPenjualan/{id}','transaksiController@nota_penjualan');
	Route::get('showedDetailHere/{id}','transaksiController@getDataDetailPenjualan');
	Route::get('cekbayar/{id}','transaksiController@cekPembayaran');
	Route::get('cetakNOTALunas/{id}','transaksiController@notaStatus');
	Route::get('cetakPembelian/{id}','laporanController@cetakPembelianExecute');
	Route::get('cetakPembelianALL','laporanController@cetakALLPembelian');
	Route::get('exportPembelianALL/{type}','laporanController@exportExcelPembelianALL');
	Route::get('exportPenjualanALL/{type}','laporanController@exportExcelPenjualanALL');

	Route::post('transaksi/pembelian/execute','transaksiController@executePembelian');
	Route::post('transaksi/penjualan','transaksiController@executePenjualan');
	Route::post('transaksi/pembayaran','transaksiController@executePembayaran');

	Route::post('data/pelanggan/simpan','dataController@inputPelanggan');
	Route::post('data/pelanggan/update','dataController@updatePelanggan');
	Route::post('data/pelanggan/delete','dataController@deletePelanggan');
	Route::post('data/pelanggan/import','dataController@importCSVPelanggan');
	Route::post('data/pelanggan/importExcel','dataController@importEXCELPelanggan');

	Route::post('data/produsen/simpan','dataController@inputProdusen');
	Route::post('data/produsen/update','dataController@updateProdusen');
	Route::post('data/produsen/delete','dataController@deleteProdusen');
	Route::post('data/produsen/import','dataController@importCSVProdusen');
	Route::post('data/produsen/importExcel','dataController@importEXCELProdusen');

	Route::post('data/produk/simpan','dataController@inputProduk');
	Route::post('data/produk/update','dataController@updateProduk');
	Route::post('data/produk/delete','dataController@deleteProduk');
	Route::post('data/produk/import','dataController@importCSVProduk');
	Route::post('data/produk/importExcel','dataController@importEXCELProduk');


	Route::get('laporan/pembelian','laporanController@pembelian');
	Route::get('laporan/penjualan','laporanController@penjualan');
	Route::get('cetakPenjualanALL','laporanController@cetakALLPenjualan');
	Route::get('cetakDetailPenjualan/{id}','laporanController@cetak_det_penjualan');



	
	Route::get('cetakPenjualanALL2/{event1}/{event2}',[
		'as' => 'report','uses' => 'laporanController@reportPenjualanTanggal'
	]);

	Route::get('exportExcelPenjualan/{event1}/{event2}/{type}',[
		'as' => 'report2','uses' => 'laporanController@reportPenjualanTanggalExcel'
	]);

	Route::get('cetakPembelianALL2/{event1}/{event2}',[
			'as' => 'report3','uses' => 'laporanController@reportPembelianTanggal'
	]);

	Route::get('exportExcelPembelian/{event1}/{event2}/{type}',[
		'as' => 'report4','uses' => 'laporanController@reportPembelianTanggalExcel'
	]);

	Route::get('cetakPelanggan/{event}','laporanController@cetakPelanggan');
	Route::get('cetakProdusen/{event}','laporanController@cetakProdusen');
	Route::get('cetakProduk/{event}','laporanController@cetakProduk');

	Route::post('ubahData','HomeController@ubahData');
	Route::get('deleteUser/{id}','HomeController@deleteUser');
	Route::post('addUser','HomeController@insertUser');


	Route::post('simpanToDo','HomeController@todoSimpan');
	Route::get('getTodo','HomeController@getTodo');
	Route::get('toDoSelesai/{id}','HomeController@selesaiTODO');
	Route::get('toDoBelum/{id}','HomeController@belumTODO');
	Route::get('deleteTodo/{id}','HomeController@deleteTODO');

});

<?php

namespace App\Http\Controllers;

use Exception;

use \App\CsvdataProduk;
use \App\CsvdataProdusen;
use \App\CsvdataPelanggan;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class dataController extends Controller
{
    public function pelanggan(){
    	$data['listPelanggan'] = \App\modelShow::getListData();
    	return view('data/pelanggan')->with($data);
    }

    public function produsen(){
    	$data['listProdusen'] = \App\modelShow::getListDataProdusen();
    	return view('data/produsen')->with($data);
    }

    public function produk(){
        $data['listProduk'] = \App\modelShow::getListDataProduk();
    	return view('data/produk')->with($data);
    }

    public function inputProdusen(Request $request){
    	$input = $request->all();

    	if(count($input) == 1){
    		return redirect('data/produsen')->with('error','Tidak ada data yang di input.');
    	}else{
    		$status = \App\executeData::insertDataProdusen($input);
    		if($status) return redirect('data/produsen')->with('success','Berhasil input produsen.');
    		else return redirect('data/produsen')->with('error','Gagal input produsen.');

    	}
    }

    public function updateProdusen(Request $request){
    	$input = $request->all();

    	if(count($input) == 2 OR count($input) == 1){
    		return redirect('data/produsen')->with('error','Tidak ada data yang di input.');
    	}else{
    		$status = \App\executeData::updateDataProdusen($input);
    		if($status) return redirect('data/produsen')->with('success','Berhasil update produsen.');
    		else return redirect('data/produsen')->with('error','Problem update produsen / hanya 1 data yang di update.');

    	}
    }

    public function deleteProdusen(Request $request){
    	$input = $request->all();

    	if(count($input) == 2 OR count($input) == 1){
    		return redirect('data/produsen')->with('error','Tidak ada data yang di input.');
    	}else{
    		$status = \App\executeData::deleteDataProdusen($input);
    		if($status) return redirect('data/produsen')->with('success','Berhasil delete produsen yang dipilih.');
    		else return redirect('data/produsen')->with('error','Gagal delete produsen yang dipilih.');

    	}
    }

    public function importCSVPelanggan(Request $request){
    	try {
			$input = $request->all();
	    	$destinationPath = 'uploads';
	    	$fileName = 'usage1.csv';
	    	$input['import']->move($destinationPath,$fileName);

	    	if (($handle = fopen ( public_path () . '/uploads/usage1.csv', 'r' )) !== FALSE) {
		        while ( ($data = fgetcsv ( $handle, 1000, ',' )) !== FALSE ) {
		            $csv_data = new CsvdataPelanggan ();
		            $csv_data->kode_pelanggan = $data [0];
		            $csv_data->tgl_registrasi = $data [1];
		            $csv_data->nama = $data [2];
		            $csv_data->alamat = $data [3];
		            $csv_data->no_telp = $data [4];
		            $csv_data->email = $data [5];
		            $csv_data->status = $data [6];
		            $csv_data->keterangan = $data [7];
		            $cek = $csv_data->save ();
		        }
		        fclose ( $handle );
	    	}

    	return redirect('data/pelanggan')->with('success','Berhasil imports pelanggan dari CSV.');

    	} catch (Exception $e) {
    		return redirect('data/pelanggan')->with('error','Gagal imports pelanggan dari CSV.');
    	}

    }

    public function importCSVProdusen(Request $request){
    	try {
			$input = $request->all();
	    	$destinationPath = 'uploads';
	    	$fileName = 'usage2.csv';
	    	$input['import']->move($destinationPath,$fileName);

	    	if (($handle = fopen ( public_path () . '/uploads/usage2.csv', 'r' )) !== FALSE) {
		        while ( ($data = fgetcsv ( $handle, 1000, ',' )) !== FALSE ) {
		            $csv_data = new CsvdataProdusen ();
		            $csv_data->kode_produsen = $data [0];
		            $csv_data->tgl_registrasi = $data [1];
		            $csv_data->nama = $data [2];
		            $csv_data->alamat = $data [3];
		            $csv_data->email = $data [4];
		            $csv_data->status = $data [5];
		            $csv_data->keterangan = $data [6];
		            $cek = $csv_data->save ();
		        }
		        fclose ( $handle );
	    	}

    	return redirect('data/produsen')->with('success','Berhasil imports produsen dari CSV.');

    	} catch (Exception $e) {
    		return redirect('data/produsen')->with('error','Gagal imports produsen dari CSV.');
    	}
    }

    public function deletePelanggan(Request $request){
    	$input = $request->all();

    	if(count($input) == 2 OR count($input) == 1){
    		return redirect('data/pelanggan')->with('error','Tidak ada data yang di delete.');
    	}else{
    		$status = \App\executeData::deletePelanggan($input);
    		if($status) return redirect('data/pelanggan')->with('success','Berhasil delete pelanggan yang dipilih.');
    		else return redirect('data/pelanggan')->with('error','Problem saat delete pelanggan yang dipilih.');

    	}
    } 

    public function updatePelanggan(Request $request){
    	$input = $request->all();

    	if(count($input) == 2 OR count($input) == 1){
    		return redirect('data/pelanggan')->with('error','Tidak ada data yang di update.');
    	}else{
    		$status = \App\executeData::updateDataPelanggan($input);
    		if($status) return redirect('data/pelanggan')->with('success','Berhasil update pelanggan.');
    		else return redirect('data/pelanggan')->with('error','Problem saat update pelanggan / Hanya 1 pelanggan yang di update (Tidak usah khawatir).');

    	}

    }

    public function inputPelanggan(Request $request){
    	$input = $request->all();

    	if(count($input) == 1){
    		return redirect('data/pelanggan')->with('error','Tidak ada data yang di input.');
    	}else{
    		$status = \App\executeData::insertDataPelanggan($input);
    		if($status) return redirect('data/pelanggan')->with('success','Berhasil input pelanggan.');
    		else return redirect('data/pelanggan')->with('error','Gagal input pelanggan.');

    	}
    	
    }

    public function inputProduk(Request $request){
        $input = $request->all();

        if(count($input) == 1){
            return redirect('data/produk')->with('error','Tidak ada data yang di input.');
        }else{
            $status = \App\executeData::insertDataProduk($input);
            if($status) return redirect('data/produk')->with('success','Berhasil input produk.');
            else return redirect('data/produk')->with('error','Gagal input produk.');

        }
    }

    public function updateProduk(Request $request){
        $input = $request->all();

        if(count($input) == 1){
            return redirect('data/produk')->with('error','Tidak ada data yang di update.');
        }else{
            $status = \App\executeData::updateDataProduk($input);
            if($status) return redirect('data/produk')->with('success','Berhasil update produk.');
            else return redirect('data/produk')->with('error','Problem saat update produk / Hanya 1 produk yang di update (Tidak usah khawatir).');

        }

    }

    public function deleteProduk(Request $request){
        $input = $request->all();

        if(count($input) == 2 OR count($input) == 1){
            return redirect('data/produk')->with('error','Tidak ada data yang di delete.');
        }else{
            $status = \App\executeData::deleteProduk($input);
            if($status) return redirect('data/produk')->with('success','Berhasil delete produk yang dipilih.');
            else return redirect('data/produk')->with('error','Problem saat delete produk yang dipilih.');

        }
    }

    public function importCSVProduk(Request $request){
        try {
            $input = $request->all();
            $destinationPath = 'uploads';
            $fileName = 'usage3.csv';
            $input['import']->move($destinationPath,$fileName);

            if (($handle = fopen ( public_path () . '/uploads/usage3.csv', 'r' )) !== FALSE) {
                while ( ($data = fgetcsv ( $handle, 1000, ',' )) !== FALSE ) {
                    $csv_data = new CsvdataProduk ();
                    $csv_data->kode_produk = $data [0];
                    $csv_data->tgl_pengisian = $data [1];
                    $csv_data->nama = $data [2];
                    $csv_data->jenis_produk = $data [3];
                    $csv_data->harga_pokok = $data [4];
                    $csv_data->harga_jual = $data [5];
                    $csv_data->stok = $data [6];
                    $csv_data->status = $data [7];
                    $csv_data->keterangan = $data [8];
                    $csv_data->id_user = $data [9];
                    $cek = $csv_data->save ();
                }
                fclose ( $handle );
            }

        return redirect('data/produk')->with('success','Berhasil imports produk dari CSV.');

        } catch (Exception $e) {
            return redirect('data/produk')->with('error','Gagal imports produk dari CSV.');
        }
    }

    public function importEXCELProdusen(Request $request){
        $input = $request->all();
        
        try {
            $input = $request->all();
            $destinationPath = 'uploads';
            $fileName = $input['import']->getClientOriginalName();
            $input['import']->move($destinationPath,$fileName);

            Excel::load( public_path () . '/uploads/'.$fileName, function($reader){

                foreach ($reader->toArray() as $key => $row) {

                    $check = DB::table('produsen')
                            ->select('*')
                            ->where('kode_produsen',$row['kode_produsen'])
                            ->get();
                    $rowsCount = count($check->toArray());

                    if($rowsCount == 0){

                         $query = DB::table('produsen')
                            ->insert([
                                'kode_produsen' => $row['kode_produsen'],
                                'tgl_registrasi' => $row['tgl_registrasi'],
                                'nama' => $row['nama'],
                                'alamat' => $row['alamat'],
                                'email' => $row['email'],
                                'status' => $row['status'],
                                'keterangan' => $row['keterangan'],
                                'id_user' => $row['id_user']
                            ]);

                    }else{

                         $query = DB::table('produsen')
                            ->where('kode_produsen',$row['kode_produsen'])
                            ->update([
                                'tgl_registrasi' => $row['tgl_registrasi'],
                                'nama' => $row['nama'],
                                'alamat' => $row['alamat'],
                                'email' => $row['email'],
                                'status' => $row['status'],
                                'keterangan' => $row['keterangan'],
                                'id_user' => $row['id_user']
                            ]);

                    }

                }

            });


        return redirect('data/produsen')->with('success','Berhasil imports produsen dari Excel.');

        } catch (Exception $e) {
            return redirect('data/produsen')->with('error','Gagal imports produsen dari Excel.');
        }

    }

    public function importEXCELPelanggan(Request $request){

        $input = $request->all();
        
        try {
            $input = $request->all();
            $destinationPath = 'uploads';
            $fileName = $input['import']->getClientOriginalName();
            $input['import']->move($destinationPath,$fileName);

            Excel::load( public_path () . '/uploads/'.$fileName, function($reader){

                foreach ($reader->toArray() as $key => $row) {

                    $check = DB::table('pelanggan')
                            ->select('*')
                            ->where('kode_pelanggan',$row['kode_pelanggan'])
                            ->get();
                    $rowsCount = count($check->toArray());

                    if($rowsCount == 0){

                        $query = DB::table('pelanggan')
                            ->insert([
                                'kode_pelanggan' => $row['kode_pelanggan'],
                                'tgl_registrasi' => $row['tgl_registrasi'],
                                'nama' => $row['nama'],
                                'alamat' => $row['alamat'],
                                'no_telp' => $row['no_telp'],
                                'email' => $row['email'],
                                'status' => $row['status'],
                                'keterangan' => $row['keterangan'],
                                'id_user' => $row['id_user']
                            ]);

                    }else{

                        $query = DB::table('pelanggan')
                            ->where('kode_pelanggan',$row['kode_pelanggan'])
                            ->update([
                                'tgl_registrasi' => $row['tgl_registrasi'],
                                'nama' => $row['nama'],
                                'alamat' => $row['alamat'],
                                'no_telp' => $row['no_telp'],
                                'email' => $row['email'],
                                'status' => $row['status'],
                                'keterangan' => $row['keterangan'],
                                'id_user' => $row['id_user']
                            ]);

                    }

                    
                }

            });


        return redirect('data/pelanggan')->with('success','Berhasil imports pelanggan dari Excel.');

        } catch (Exception $e) {
            return redirect('data/pelanggan')->with('error','Gagal imports pelanggan dari Excel.');
        }

    }

    public function importEXCELProduk(Request $request){

        $input = $request->all();
        
        try {
            $input = $request->all();
            $destinationPath = 'uploads';
            $fileName = $input['import']->getClientOriginalName();
            $input['import']->move($destinationPath,$fileName);

            Excel::load( public_path () . '/uploads/'.$fileName, function($reader){

                foreach ($reader->toArray() as $key => $row) {

                    $check = DB::table('produk')
                            ->select('*')
                            ->where('kode_produk',$row['kode_produk'])
                            ->get();
                    $rowsCount = count($check->toArray());

                    if($rowsCount == 0){

                        $query = DB::table('produk')
                            ->insert([
                                'kode_produk' => $row['kode_produk'],
                                'tgl_pengisian' => $row['tgl_pengisian'],
                                'nama' => $row['nama'],
                                'jenis_produk' => $row['jenis_produk'],
                                'harga_pokok' => $row['harga_pokok'],
                                'harga_jual' => $row['harga_jual'],
                                'stok' => $row['stok'],
                                'status' => $row['status'],
                                'keterangan' => $row['keterangan'],
                                'id_user' => $row['id_user']
                            ]);  
                        

                    }else{

                        $query = DB::table('produk')
                            ->where('kode_produk',$row['kode_produk'])
                            ->update([
                                'tgl_pengisian' => $row['tgl_pengisian'],
                                'nama' => $row['nama'],
                                'jenis_produk' => $row['jenis_produk'],
                                'harga_pokok' => $row['harga_pokok'],
                                'harga_jual' => $row['harga_jual'],
                                'stok' => $row['stok'],
                                'status' => $row['status'],
                                'keterangan' => $row['keterangan'],
                                'id_user' => $row['id_user']
                            ]);  
                        }

                    }


            });


        return redirect('data/produk')->with('success','Berhasil imports produk dari Excel.');

        } catch (Exception $e) {
            return redirect('data/produk')->with('error','Gagal imports produk dari Excel.');
        }

    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class transaksiController extends Controller
{
    
    public function pembelian(){
    	$data['listProdusen'] = \App\modelShow::getListDataProdusenSelect();
    	$data['listBarang'] = \App\modelShow::getDataBarang();
    	return view('transaksi/pembelian')->with($data);
    }

    public function penjualan(){
    	$data['listPelanggan'] = \App\modelShow::getListedCustomer();
    	$data['listBarang'] = \App\modelShow::getDataBarang();
    	return view('transaksi/penjualan')->with($data);
    }

    public function pembayaran(){
        $data['listPenjualan'] = \App\modelShow::getListedPenjualanWithName();
        return view('transaksi/pembayaran')->with($data);
    }

    public function getDataDetailPenjualan($id){
        $res = \App\modelLaporan::getDetailPenjualanByID($id);
        foreach ($res as $key => $value) {
        ?>
            <tr>
                <td><?php echo $value->kode_det_penjualan ?></td>
                <td><?php echo $value->kode_produk ?></td>
                <td><?php echo $value->nama_produk ?></td>
                <td><?php echo $value->harga_jual ?></td>
                <td><?php echo $value->qty ?></td>
                <td class="subItemTotal"><?php echo $value->subtotal ?></td>
            </tr>
        <?php
        }
        // END OF FOREACH DEAR
    }

    public function cekPembayaran($id){
        $check = DB::table('pembayaran')
                ->selectRaw('sum(jumlah_bayar) as jumlahBayar')
                ->where('kode_penjualan',$id)
                ->get();

        if(count($check->toArray()) == 0){
            echo '0';
        }else{
            $jumlah = '';
            foreach ($check->toArray() as $key => $value) {
            $jumlah = $value->jumlahBayar;
            }

            echo $jumlah;
        }

    }

    public function executePembayaran(Request $request){
        $input = $request->all();

        $rules = [
            'kode_penjualan' => 'required',
            'kode_pelanggan' => 'required',
            'nama_pelanggan' => 'required',
            'tipe' => 'required',
            'diskon' => 'required',
            'pajak' => 'required',
            'totBayar' => 'required',
            'sudahBayar' => 'required',
            'statusPembayaran' => 'required',
            'diBayar' => 'required',
            'sudahBayarOnBOX' => 'required',
        ];

        $this->validate($request,$rules);

        if($input['tipe'] == 'Tunai'){

            if($input['diBayar'] < $input['sudahBayarOnBOX'] || $input['diBayar'] > $input['sudahBayarOnBOX']){
                return redirect('transaksi/pembayaran')->with('error','Harus dibayar secara tunai tak boleh lebih atau kurang.');
            }else{

                $status1 = \App\modelPembayaran::executeTUNAI($input);
                if($status1){
                    return redirect('transaksi/pembayaran')->with('success','Pembayaran Tunai Berhasil.');
                }else{
                    return redirect('transaksi/pembayaran')->with('error','Pembayaran Tunai Gagal.');
                }

            }

        }elseif($input['tipe'] == 'Kredit'){

            if($input['diBayar'] > $input['sudahBayarOnBOX']){
                return redirect('transaksi/pembayaran')->with('error','Boleh di bayar secara cicil. Tidak boleh lebih dari biaya yang ditetapkan.');
            }else{

                $status2 = \App\modelPembayaran::executeKREDIT($input);
                if($status2){
                    return redirect('transaksi/pembayaran')->with('success','Pembayaran Kredit Berhasil.');
                }else{
                    return redirect('transaksi/pembayaran')->with('error','Pembayaran Kredit Gagal.');
                }

            }

        }

        // echo "<pre>";
        // print_r($input);
    }

    public function notaStatus($id){
        $data['needed'] = \App\modelLaporan::getDataPenjualanByID($id);
        return view('laporan/notaLUNAS')->with($data);
    }

    public function getAllRecordPembelian(){
    	$ambilData = \App\modelShow::getDataPembelian();
    	?>
			
			<table class="table table-hover" id="listRecordPembelian">
				<thead>
					<th>No. </th>
					<th>Kode Pembelian</th>
					<th>Tanggal Pembelian</th>
					<th>Kode Produsen</th>
				</thead>
				<tbody>
					<?php
					$x = 1;
					foreach ($ambilData as $key => $value) {
						?>
							<tr>
								<td><?php echo $x ?></td>
								<td><?php echo $value->kode_pembelian ?></td>
								<td><?php echo $value->tgl_pembelian ?></td>
								<td><?php echo $value->kode_produsen ?></td>
							</tr>
						<?php
					$x++;
					}
					?>
				</tbody>
			</table>

    	<?php
    }

    public function executePembelian(Request $request){
    	$input = $request->all();

    	if(count($input) == 2){
    		echo '<div class="alert alert-danger">
			<button type="button" class="close pull-right" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			Tidak ada yang di input.
			</div>';
    	}else{

    		$status = \App\executeDataTransaksi::executePembelianNow($input);

    		if($status){
    			echo '<div class="alert alert-success">
				<button type="button" class="close pull-right" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				Berhasil di input
				</div>';
    		}else{
    			echo '<div class="alert alert-danger">
				<button type="button" class="close pull-right" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				Gagal di input.
				</div>';
    		}

    	}

    }

    public function executePenjualan(Request $request){
    	$input = $request->all();

    	$rules = [
            'kode_pelanggan' => 'required',
            'nama_pelanggan' => 'required',
            'tipe_pembayaran' => 'required',
            'subTotal' => 'required',
            'diskon' => 'required',
            'pajak' => 'required',
            'totBayar' => 'required',
        ];

        $this->validate($request,$rules);

        $status = \App\executeDataTransaksi::executePenjualanNOW($input);

        if($status != ''){
             $id = $status;
             $url = URL('notaPenjualan').'/'.$id;

            return redirect('transaksi/penjualan')->with('success','Transaksi penjualan berhasil di lakukan. &nbsp;<a class="btn btn-info btn-sm" href="'.$url.'" target="_blank">Cetak Nota</a>');
        } else {
            return redirect('transaksi/penjualan')->with('error','Gagal melakukan transaksi penjualan.');
        } 

    }

    public function nota_penjualan($id){
        $data['parentPenjualan'] = \App\modelLaporan::getDataPenjualanByID($id);
        $data['detailPenjualan'] = \App\modelLaporan::getDetailPenjualanByID($id);

        return view('laporan/notaPenjualan')->with($data);
    }

}

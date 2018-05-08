<?php
	foreach ($dataPenjualanPARENT as $key => $value) {
		$kode = $value->kode_penjualan;
		$kode_pelanggan = $value->kode_pelanggan;
		$nama_pelanggan = $value->nama_pelanggan;
		$tanggal = $value->tgl_penjualan;
		$status = $value->status;
		$tipe_pembayaran = $value->tipe_pembayaran;
		$diskon = $value->diskon;
		$pajak = $value->pajak;
		$total_bayar = $value->total_bayar;
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Nota Penjualan</title>
</head>
<body onload="window.print();">
	<table>
		<thead>
			<tr>
				<td style="outline: thin solid black" colspan="6">
					<center><h2>PT. Maju Mundur</h2></center>	
				</td>
			</tr>
			<tr>
				<td style="outline: thin solid black" colspan="6">
					<center>Cianjur</center>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td style="outline: thin solid black" colspan="6"><center><i><b>LAPORAN PENJUALAN</b></i></center></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
			</tr>
			<tr style="outline: thin solid black">
				<td>Tanggal Penjualan : </td>
				<td>{{ $tanggal }}</td>
			</tr>
			<tr style="outline: thin solid black">
				<td>Kode Penjualan : </td>
				<td>{{ $kode }}</td>
			</tr>
			<tr style="outline: thin solid black">
				<td>Kode Pelanggan : </td>
				<td>{{ $kode_pelanggan }}</td>
			</tr>
			<tr style="outline: thin solid black">
				<td>Nama Pelanggan : </td>
				<td>{{ $nama_pelanggan }}</td>
			</tr>
			<tr style="outline: thin solid black">
				<td>Total Bayar : </td>
				<td>{{ $total_bayar }}</td>
			</tr>
			<tr style="outline: thin solid black">
				<td>Status : </td>
				<td>{{ $status }}</td>
			</tr>
			<tr style="outline: thin solid black">
				<td>Tipe Pembayaran : </td>
				<td>{{ $tipe_pembayaran }}</td>
			</tr>
			<tr>
				<td colspan="6"><hr></td>
			</tr>
			<tr>
				<td colspan="6"><br></td>
			</tr>
			<tr style="outline: thin solid black">
				<td colspan="6"><center><i>Detail Penjualan</i></center></td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<th style="outline: thin solid black">Kode Detail</th>
				<th style="outline: thin solid black">Kode Produk</th>
				<th style="outline: thin solid black">Nama Produk</th>
				<th style="outline: thin solid black">Harga Jual</th>
				<th style="outline: thin solid black">Qty</th>
				<th style="outline: thin solid black">SubTotal</th>
			</tr>
			
			@foreach($dataDetailpenjualan as $val)
			<tr>
				<td style="outline: thin solid black;text-align: center;">{{ $val->kode_det_penjualan }}</td>
				<td style="outline: thin solid black;text-align: center;">{{ $val->kode_produk }}</td>
				<td style="outline: thin solid black;text-align: center;">{{ $val->nama_produk }}</td>
				<td style="outline: thin solid black;text-align: center;">{{ $val->harga_jual }}</td>
				<td style="outline: thin solid black;text-align: center;">{{ $val->qty }}</td>
				<td style="outline: thin solid black;text-align: center;">{{ $val->subtotal }}</td>
			</tr>
			@endforeach

			<tr>
				<td colspan="6">&nbsp;</td>
			</tr>
			<tr>
				<td colspan="6"><hr></td>
			</tr>
			
			
		</tbody>
	</table>
</body>
</html>
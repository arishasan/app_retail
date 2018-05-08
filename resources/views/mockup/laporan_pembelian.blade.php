<?php
	foreach ($dataPembelianPARENT as $key => $value) {
		$tanggal = $value->tgl_pembelian;
		$kodePembelian = $value->kode_pembelian;
		$kodeProdusen = $value->kode_produsen;
		$namaProdusen = $value->nama;
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
				<td style="outline: thin solid black" colspan="6"><center><i><b>LAPORAN PEMBELIAN</b></i></center></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
			</tr>
			<tr style="outline: thin solid black">
				<td>Tanggal Pembelian : </td>
				<td>{{ $tanggal }}</td>
			</tr>
			<tr style="outline: thin solid black">
				<td>Kode Pembelian : </td>
				<td>{{ $kodePembelian }}</td>
			</tr>
			<tr style="outline: thin solid black">
				<td>Kode Produsen : </td>
				<td><b>{{ $kodeProdusen }}</b></td>
			</tr>
			<tr style="outline: thin solid black">
				<td>Nama Produsen : </td>
				<td><b>{{ $namaProdusen }}</b></td>
			</tr>
			<tr>
				<td colspan="6"><hr></td>
			</tr>
			<tr>
				<td colspan="6"><br></td>
			</tr>
			<tr style="outline: thin solid black">
				<td colspan="6"><center><i>Detail Pembelian</i></center></td>
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
				<th style="outline: thin solid black">Qty</th>
			</tr>
			
			@foreach($detailPembelian as $val)
			<tr>
				<td style="outline: thin solid black;text-align: center;">{{ $val->kode_det_pembelian }}</td>
				<td style="outline: thin solid black;text-align: center;">{{ $val->kode_produk }}</td>
				<td style="outline: thin solid black;text-align: center;">{{ $val->nama }}</td>
				<td style="outline: thin solid black;text-align: center;">{{ $val->jumlah }}</td>
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
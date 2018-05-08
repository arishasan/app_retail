<?php
	foreach ($needed as $key => $value) {
		$kode = $value->kode_penjualan;
		$nama = $value->nama_pelanggan;
		$status = $value->status;
		$tipe = $value->tipe_pembayaran;
		$total = $value->total_bayar;
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Nota Lunas</title>
</head>
<body onload="window.print()">
	<table style="outline: thin solid black">
		<tr>
			<td colspan="3" style="outline: thin solid black">
				<center><h3>PT. Maju Mundur</h3></center>
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<center>Cianjur</center>
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<br>
			</td>
		</tr>
		<tr>
			<td>Kode Penjualan</td>
			<td>:</td>
			<td><b>{{ $kode }}</b></td>
		</tr>
		<tr>
			<td>Nama Pelanggan</td>
			<td>:</td>
			<td><b>{{ $nama }}</b></td>
		</tr>
		<tr>
			<td>Tipe Pembayaran</td>
			<td>:</td>
			<td><b>{{ $tipe }}</b></td>
		</tr>
		<tr>
			<td colspan="3"><br></td>
		</tr>
		<tr>
			<td colspan="3"><center><h1>{{ $status }}</h1></center></td>
		</tr>
		
		<tr>
			<td colspan="3"><br></td>
		</tr>
		<tr>
			<td colspan="3"><center>Total Bayar :<h3>Rp. {{ $total }}</h3></center></td>
		</tr>
	</table>
</body>
</html>
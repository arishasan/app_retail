<?php
	foreach ($parentPenjualan as $key => $value) {
		$kode = $value->kode_penjualan;
		$kodePelanggan = $value->kode_pelanggan;
		$tanggal = date('d-m-Y', strtotime($value->tgl_penjualan));
		$nama_pelanggan = $value->nama_pelanggan;
		$tipe =  $value->tipe_pembayaran ;
		$status =  $value->status ;
		$diskon = $value->diskon ;
		$pajak = $value->pajak ;
		$totalBayar =  $value->total_bayar ;
	}

	$bulanAr = array(
		'01' => 'Januari',
		'02' => 'Februari',
		'03' => 'Maret',
		'04' => 'April',
		'05' => 'Mei',
		'06' => 'Juni',
		'07' => 'Juli',
		'08' => 'Agustus',
		'09' => 'September',
		'10' => 'Oktober',
		'11' => 'November',
		'12' => 'Desember',
	);

	$hari = substr($tanggal,0,2);
	$bulan = substr($tanggal,3,2);
	$tahun = substr($tanggal,6,4);

	$arrangeTanggal = $hari.'/'.$bulanAr[$bulan].'/'.$tahun;
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
				<td style="outline: thin solid black" colspan="6"><center><i><b>NOTA PENJUALAN</b></i></center></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
			</tr>
			<tr style="outline: thin solid black">
				<td>Tanggal Transaksi : </td>
				<td>{{ $arrangeTanggal }}</td>
			</tr>
			<tr style="outline: thin solid black">
				<td>Kode Transaksi : </td>
				<td>{{ $kode }}</td>
			</tr>
			<tr style="outline: thin solid black">
				<td>Kode Pelanggan : </td>
				<td><b>{{ $kodePelanggan }}</b></td>
			</tr>
			<tr style="outline: thin solid black">
				<td>Nama Pelanggan : </td>
				<td><b>{{ $nama_pelanggan }}</b></td>
			</tr>
			<tr>
				<td colspan="6"><hr></td>
			</tr>
			<tr style="outline: thin solid black">
				<td>Tipe Pembayaran : </td>
				<td>{{ $tipe }}</td>
			</tr>
			<tr>
				<td colspan="6"><hr></td>
			</tr>
			<tr>
				<td colspan="6"><br></td>
			</tr>
			<tr style="outline: thin solid black">
				<td colspan="6"><center><i>Detail Produk</i></center></td>
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
			<?php
			foreach ($detailPenjualan as $key => $value) {
				?>
					<tr>
						<td style="outline: thin solid black;text-align: center"><?php echo $value->kode_det_penjualan ?></td>
						<td style="outline: thin solid black;text-align: center"><?php echo $value->kode_produk ?></td>
						<td style="outline: thin solid black;text-align: center"><?php echo $value->nama_produk ?></td>
						<td style="outline: thin solid black;text-align: center"><?php echo $value->harga_jual ?></td>
						<td style="outline: thin solid black;text-align: center"><?php echo $value->qty ?></td>
						<td style="outline: thin solid black;text-align: center"><?php echo $value->subtotal ?></td>
					</tr>
				<?php
			}
			?>
			<tr>
				<td colspan="6">&nbsp;</td>
			</tr>
			<tr>
				<td colspan="6"><hr></td>
			</tr>
			<tr>
				<td colspan="6">
					Diskon : Rp,- {{ $diskon }}
				</td>
			</tr>
			<tr>
				<td colspan="6">
					Pajak : Rp,- {{ $pajak }}
				</td>
			</tr>
			<tr>
				<td colspan="6">
					<b>Total Bayar : Rp,- {{ $totalBayar }}</b>
				</td>
			</tr>
			<tr>
				<td colspan="6">
					&nbsp;
				</td>
			</tr>
			<tr>
				<td colspan="3">&nbsp;</td>
				<td colspan="3"><center>Status Pembayaran : <h3>{{ $status }}</h3></center></td>
			</tr>
		</tbody>
	</table>
</body>
</html>
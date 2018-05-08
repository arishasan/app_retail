<?php

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
				<td style="outline: thin solid black" colspan="9">
					<center><h2>PT. Maju Mundur</h2></center>	
				</td>
			</tr>
			<tr>
				<td style="outline: thin solid black" colspan="9">
					<center>Cianjur</center>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
			</tr>
			<?php
				if($tgl1 !== ''  && $tgl2 !== '' ){
					?>
					
					<tr>
						<td>PERIODE : <?php echo date('d-m-Y', strtotime($tgl1)); ?> <b>/</b> <?php echo date('d-m-Y', strtotime($tgl2)); ?></td>
					</tr>

					<?php
				}
			?>
			<tr>
				<td style="outline: thin solid black" colspan="9"><center><i><b>REKAP LAPORAN PENJUALAN</b></i></center></td>
			</tr>
			
		</thead>
		<tbody>
			<tr>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<th style="outline: thin solid black">Kode Penjualan</th>
				<th style="outline: thin solid black">Kode Pelanggan</th>
				<th style="outline: thin solid black">Nama Pelanggan</th>
				<th style="outline: thin solid black">Tanggal Penjualan</th>
				<th style="outline: thin solid black">Status</th>
				<th style="outline: thin solid black">Tipe Pembayaran</th>
				<th style="outline: thin solid black">Diskon</th>
				<th style="outline: thin solid black">Pajak</th>
				<th style="outline: thin solid black">Total Bayar</th>
			</tr>
			
			@foreach($dataPenjualanPARENT as $val)
			<tr>
				<td style="outline: thin solid black;text-align: center;">{{ $val->kode_penjualan }}</td>
				<td style="outline: thin solid black;text-align: center;">{{ $val->kode_pelanggan }}</td>
				<td style="outline: thin solid black;text-align: center;">{{ $val->nama_pelanggan }}</td>
				<td style="outline: thin solid black;text-align: center;">{{ $val->tgl_penjualan }}</td>
				<td style="outline: thin solid black;text-align: center;">{{ $val->status }}</td>
				<td style="outline: thin solid black;text-align: center;">{{ $val->tipe_pembayaran }}</td>
				<td style="outline: thin solid black;text-align: center;">{{ $val->diskon }}</td>
				<td style="outline: thin solid black;text-align: center;">{{ $val->pajak }}</td>
				<td style="outline: thin solid black;text-align: center;">{{ $val->total_bayar }}</td>
			</tr>
			@endforeach

			<tr>
				<td colspan="9">&nbsp;</td>
			</tr>
			<tr>
				<td colspan="9"><hr></td>
			</tr>
			
			
		</tbody>
	</table>
</body>
</html>
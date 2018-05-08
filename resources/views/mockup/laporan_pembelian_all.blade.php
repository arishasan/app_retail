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
			<?php
				if($event1 !== '' && $event2 !== ''){
					?>
						<tr>
							<td>Periode Pembelian : {{ date('d-m-Y',strtotime($event1)) }} <b>/</b> {{ date('d-m-Y',strtotime($event2)) }}</td>
						</tr>
					<?php
				}
			?>
			<tr>
				<td style="outline: thin solid black" colspan="6"><center><i><b>REKAP LAPORAN PEMBELIAN</b></i></center></td>
			</tr>
			
		</thead>
		<tbody>
			<tr>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<th style="outline: thin solid black">Kode Pembelian</th>
				<th style="outline: thin solid black">Tanggal Pembelian</th>
				<th style="outline: thin solid black">Kode Produsen</th>
				<th style="outline: thin solid black">Nama Produsen</th>
			</tr>
			
			@foreach($dataPembelianPARENT as $val)
			<tr>
				<td style="outline: thin solid black;text-align: center;">{{ $val->kode_pembelian }}</td>
				<td style="outline: thin solid black;text-align: center;">{{ $val->tgl_pembelian }}</td>
				<td style="outline: thin solid black;text-align: center;">{{ $val->kode_produsen }}</td>
				<td style="outline: thin solid black;text-align: center;">{{ $val->nama }}</td>
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
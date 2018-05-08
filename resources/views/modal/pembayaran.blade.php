<div id="modalListPenjualan">
	<table class="table table-hover" id="listDataPenjualan">
		<thead>
			<tr>
			<th>No. </th>
			<th>Kode Penjualan</th>
			<th>Kode Pelanggan</th>
			<th>Nama Pelanggan</th>
			<th>Tipe Pembayaran</th>
			<th>Diskon</th>
			<th>Pajak</th>
			<th>Total Bayar</th>
			<th>Status</th>
			<th>PILIH</th>
		</tr>
		</thead>
		<tbody id="echoedDataPenjualan">
			<?php
				$i = 1;
				foreach ($listPenjualan as $key => $value) {
					?>
						<tr>
							<td><?php echo $i; ?></td>
							<td><?php echo $value->kode_penjualan; ?></td>
							<td><?php echo $value->kode_pelanggan; ?></td>
							<td><?php echo $value->nama; ?></td>
							<td><?php echo $value->tipe_pembayaran; ?></td>
							<td><?php echo $value->diskon; ?></td>
							<td><?php echo $value->pajak; ?></td>
							<td><?php echo $value->total_bayar; ?></td>
							<td><?php echo $value->status; ?></td>
							<td>
								<button class="btn btn-primary pilihPenjualan">Pilih</button>
							</td>
						</tr>
					<?php
					$i++;
				}
			?>
		</tbody>
	</table>
</div>
<div id="modalListPelangganPenjualan">
	<table class="table table-hover" id="listDataPelangganPenjualan">
		<thead>
			<tr>
				<th>Kode Pelanggan</th>
				<th>Nama Pelanggan</th>
				<th>Alamat</th>
				<th>No Telp</th>
				<th>Email</th>
				<th>Pilih</th>
			</tr>
		</thead>
		<tbody id="showListedCustomer">
			@foreach($listPelanggan as $val)
			<tr>
				<td>{{ $val->kode_pelanggan }}</td>
				<td>{{ $val->nama }}</td>
				<td>{{ $val->alamat }}</td>
				<td>{{ $val->no_telp }}</td>
				<td>{{ $val->email }}</td>
				<td>
					<button class="btn btn-primary pilihPelanggan"><i class="icon-paper-airplane"></i></button>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
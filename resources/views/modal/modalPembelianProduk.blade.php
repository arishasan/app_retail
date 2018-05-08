<div id="dialogListProdukPembelian">
	<table class="table table-hover" id="modalDataBarang">
		<thead>
			<tr>
				<th>Kode Produk</th>
				<th>Nama Produk</th>
				<th>Jenis Produk</th>
				<th>Keterangan</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody id="bodyModalDataBarang">
			@foreach($listBarang as $val)
				<tr>
					<td>{{ $val->kode_produk }}</td>
					<td>{{ $val->nama }}</td>
					<td>{{ $val->jenis_produk }}</td>
					<td>{{ $val->keterangan }}</td>
					<td>
						<button class="btn btn-info pilihProduk">PILIH</button>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
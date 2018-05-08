@extends('templates/header')
@section('content')
    
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Produk</h2>
            </div>
          </header>
          <!-- Dashboard Counts Section-->
          <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
              <div class="row bg-white has-shadow">
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    
                    <div class="title"><span>Produk<br>Baru</span>
                    </div>
                    <button type="button" id="addProduk" class="btn btn-primary">Add Data</button>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">

                    <div class="title"><span>Edit<br>Produk</span>
                    </div>
                    <button type="button" id="editProduk" class="btn btn-success btn-flat">Edit Data</button>

                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    
                    <div class="title"><span>Delete<br>Produk</span>
                    </div>
                    <button type="button" id="deleteProduk" class="btn btn-danger btn-flat">Delete Data</button>

                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                   <div class="title"><span>Data<br>Produk</span>
                    </div>
                    <button type="button" id="showProduk" class="btn btn-info btn-flat">Show Data</button>
                  </div>
                </div>
              </div>
              @include('feedback')
            </div>
          </section>
          <!-- Dashboard Header Section    -->
          

          <section class="dashboard-header" id="listProduk">
            <div class="container-fluid">
              <div class="row">
                <!-- Trending Articles-->
                <div class="col-lg-12">
                  <div class="articles card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard4" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h2 class="h3">List Produk   </h2>
                      <div class="badge badge-rounded bg-green">Data       </div>
                    </div>
                    <div class="card-body no-padding">
                      <div class="item  align-items-center">
                        <a href="{{ url('cetakProduk/xls') }}"><button class="btn btn-warning">Cetak Excel (.xls)</button></a>
                        &nbsp;
                        <a href="{{ url('cetakProduk/xlsx') }}"><button class="btn btn-warning">Cetak Excel (.xlsx)</button></a>
                        <hr>
                        <table class="table table-hover" id="listDataProduk">
                        	<thead>
                        		<tr>
                        			<th>No. </th>
                        			<th>Kode Produk</th>
                        			<th>Tanggal input</th>
                        			<th>Jenis Produk</th>
                        			<th>Nama Produk</th>
                        			<th>Harga Pokok</th>
                        			<th>Harga Jual</th>
                        			<th>Stok</th>
                        			<th>Status</th>
                        			<th>Keterangan</th>
                        		</tr>
                        	</thead>
                        	<tbody>
                        		<?php $i = 1;  foreach($listProduk as $val){?>
								<tr>
									<td>{{ $i }}</td>
									<td>{{ $val->kode_produk }}</td>
									<td>{{ $val->tgl_pengisian }}</td>
									<td>{{ $val->nama }}</td>
									<td>{{ $val->jenis_produk }}</td>
									<td>{{ $val->harga_pokok }}</td>
									<td>{{ $val->harga_jual }}</td>
									<td>{{ $val->stok }}</td>
									<td>{{ $val->status }}</td>
									<td>{{ $val->keterangan }}</td>
								</tr>
                        		<?php $i++;} ?>
                        	</tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>




          <section class="dashboard-header" id="listEditProduk">
            <div class="container-fluid">
              <div class="row">
                <!-- Trending Articles-->
                <div class="col-lg-12">
                  <div class="articles card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard4" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h2 class="h3">Edit Produsen   </h2>
                      <div class="badge badge-rounded bg-green">Take Data       </div>
                    </div>
                    
                    <div class="card-body no-padding">
                      <div class="item  align-items-center">
                        <p>Ambil Data Dengan Cara Drag atau pilih ke kolum dibawah untuk di edit.</p>
                        <hr>
                        <table class="table table-hover" id="listEditDataProduk">
                        	<thead>
                        		<tr>
                        			<th>Kode Produk</th>
                        			<th>Tanggal input</th>
                        			<th>Nama Produk</th>
                        			<th>Jenis Produk</th>
                        			<th>Harga Pokok</th>
                        			<th>Harga Jual</th>
                        			<th>Stok</th>
                        			<th>Status</th>
                        			<th>Keterangan</th>
                        			<th>Aksi</th>
                        		</tr>
                        	</thead>
                        	<tbody id="selectHere">
                        		<?php $i = 1;  foreach($listProduk as $val){?>
								<tr>
									<td>{{ $val->kode_produk }}</td>
									<td>{{ $val->tgl_pengisian }}</td>
									<td>{{ $val->nama }}</td>
									<td>{{ $val->jenis_produk }}</td>
									<td>{{ $val->harga_pokok }}</td>
									<td>{{ $val->harga_jual }}</td>
									<td>{{ $val->stok }}</td>
									<td>{{ $val->status }}</td>
									<td>{{ $val->keterangan }}</td>
									<td><button type="button" class="btn btn-primary selectRecordProduk">PILIH</button></td>
								</tr>
                        		<?php $i++;} ?>
                        	</tbody>
                        </table>
                      </div>
                    </div>
                    
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="articles card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard4" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h2 class="h3">Edit Produsen   </h2>
                      <div class="badge badge-rounded bg-green">Dropped Here       </div>
                    </div>
                    <form action="{{ url('data/produk/update') }}" method="POST">
                    <div class="card-body no-padding">
                      <div class="item  align-items-center">
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-success" value="Simpan Perubahan">
                        <hr>
                        <table class="table table-hover" id="droppedProduk">
                        	<thead>
                        		<tr>
                        			<th hidden="true">Kode Produk</th>
                        			<th>&nbsp;</th>
                        			<th>Nama Produk</th>
                        			<th>Jenis Produk</th>
                        			<th>Harga Pokok</th>
                        			<th>Harga Jual</th>
                        			<th>Stok</th>
                        			<th>Status</th>
                        			<th>Keterangan</th>
                        		</tr>
                        	</thead>
                        	<tbody id="showDroppedHere">
                        		<tr>
                        			<td colspan="9"><center>Drag ke sini</center></td>
                        		</tr>
                        	</tbody>
                        </table>
                      </div>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </section>


          <section class="dashboard-header" id="listDeleteProduk">
            <div class="container-fluid">
              <div class="row">
                <!-- Trending Articles-->
                <div class="col-lg-12">
                  <div class="articles card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard4" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h2 class="h3">Delete produk   </h2>
                      <div class="badge badge-rounded bg-green">Delete       </div>
                    </div>
                    <form action="{{ url('data/produk/delete') }}" method="POST">
                      {{ csrf_field() }}
                    <div class="card-body no-padding">
                      <div class="item  align-items-center">
                        <input type="submit" class="btn btn-danger" value="Delete produk Yang Sudah Di Ceklis">
                        <hr>
                        <table class="table table-hover" id="listDeleteDataProduk">
                        	<thead>
                        		<tr>
                        			<th>&nbsp;</th>
                        			<th>No. </th>
                        			<th>Kode Produk</th>
                        			<th>Tanggal input</th>
                        			<th>Jenis Produk</th>
                        			<th>Nama Produk</th>
                        			<th>Harga Pokok</th>
                        			<th>Harga Jual</th>
                        			<th>Stok</th>
                        			<th>Status</th>
                        			<th>Keterangan</th>
                        		</tr>
                        	</thead>
                        	<tbody id="listDataToBeDeletedS">
                        		<?php $i = 1;  foreach($listProduk as $val){?>
								<tr>
									<td>
		                              <div class="i-checks">
		                              <input id="checkboxCustom1" type="checkbox" class="checkbox-template cekliss">
		                              </div>
		                              <div class="showResultHereDelete"></div>
		                            </td>
									<td>{{ $i }}. </td>
									<td>{{ $val->kode_produk }}</td>
									<td>{{ $val->tgl_pengisian }}</td>
									<td>{{ $val->nama }}</td>
									<td>{{ $val->jenis_produk }}</td>
									<td>{{ $val->harga_pokok }}</td>
									<td>{{ $val->harga_jual }}</td>
									<td>{{ $val->stok }}</td>
									<td>{{ $val->status }}</td>
									<td>{{ $val->keterangan }}</td>
								</tr>
                        		<?php $i++;} ?>
                        	</tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  </form>
                </div>
              </div>
            </div>
          </section>



          <section class="dashboard-header" id="formAddProduk">
            <div class="container-fluid">
              <div class="row">
                <!-- Trending Articles-->
                <div class="col-lg-12">
                  <div class="articles card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard4" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h2 class="h3">Add Produsen   </h2>
                      <div class="badge badge-rounded bg-green">ADD       </div>
                    </div>
                    <div class="card-body no-padding">
                      <form action="{{ url('data/produk/simpan') }}" method="POST">
                      {{ csrf_field() }}
                      <div class="item  align-items-center">
                        <button type="button" data-toggle="modal" data-target="#formPelanggan" class="btn btn-primary">Buka Form</button>
                        <button type="submit" class="btn btn-success">Simpan</button>

                        <button type="button" data-toggle="modal" data-target="#modalCSV" class="btn btn-info pull-right">Import Dari CSV</button>

                        <button type="button" data-toggle="modal" data-target="#modalExcel" class="btn btn-danger pull-right">Import Dari Excel</button>
                        <hr>
                        <table class="table table-hover" id="listAddedProduk">
                          <thead>
                            <tr>
                            <th>Nama Produk</th>
                            <th>Jenis Produk</th>
                            <th>Harga Pokok</th>
                            <th>Harga Jual</th>
                            <th>Stok</th>
                            <th>Status</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                          </tr>
                          </thead>
                          <tbody id="munculKanHasilProduk">
                            
                          </tbody>
                        </table>
                      </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          
                     <div id="formPelanggan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                        <div role="document" class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 id="exampleModalLabel" class="modal-title">Form Input Data Produk</h4>
                              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                              <p>Isi data data untuk Produk.</p>
                              
                                <div class="form-group">
                                  <input type="text" placeholder="Nama produk" id="nm_produk" class="form-control">
                                </div>
                                <div class="form-group">
                                  <select id="jns_produk" class="form-control" title="Jenis Produk">
                                    <option value="Food">Food</option>
                                    <option value="Non-Food">Non-Food</option>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <input type="number" placeholder="Harga pokok" id="hg_pokok" class="form-control">
                                </div>
                                <div class="form-group">
                                  <input type="number" placeholder="Harga jual" id="hg_jual" class="form-control">
                                </div>
                                <div class="form-group">
                                  <input type="number" placeholder="Stok" id="stok" class="form-control">
                                </div>
                                <div class="form-group">
                                  <select id="st_produk" class="form-control" title="Status Produk">
                                    <option value="Aktif">Aktif</option>
                                    <option value="Non-Aktif">Non-Aktif</option>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <input type="text" placeholder="Keterangan" id="ket" class="form-control">
                                </div>
                                
                                
                              
                            </div>
                            <div class="modal-footer">
                              <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                              <button type="button" id="tambahKeTableProduk" class="btn btn-primary">Tambahkan</button>
                            </div>
                          </div>
                        </div>
                      </div>
                
                  <div id="modalCSV" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                        <div role="document" class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 id="exampleModalLabel" class="modal-title">Input data produk menggunakan CSV</h4>
                              <form action="{{ url('data/produk/import') }}" method="POST" enctype="multipart/form-data">
                              {{ csrf_field() }}
                              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                              <p>Silahkan pilih terlebih dahulu source file nya.</p>
                              
                                <div class="form-group">
                                  <input type="file" name="import" class="form-control" required="true">
                                </div>

                            </div>
                            <div class="modal-footer">
                              <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                              <button type="submit" class="btn btn-primary">SUBMIT</button>
                            </div>
                          </div>
                        </div>
                        </form>
                      </div>

                      <div id="modalExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                        <div role="document" class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 id="exampleModalLabel" class="modal-title">Input data produk menggunakan Excel</h4>
                              <form action="{{ url('data/produk/importExcel') }}" method="POST" enctype="multipart/form-data">
                              {{ csrf_field() }}
                              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                              <p>Silahkan pilih terlebih dahulu source file nya.</p>
                              
                                <div class="form-group">
                                  <input type="file" name="import" class="form-control" required="true">
                                </div>

                            </div>
                            <div class="modal-footer">
                              <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                              <button type="submit" class="btn btn-primary">SUBMIT</button>
                            </div>
                          </div>
                        </div>
                        </form>
                      </div>

@endsection






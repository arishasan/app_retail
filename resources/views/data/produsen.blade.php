@extends('templates/header')
@section('content')
    
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Produsen</h2>
            </div>
          </header>
          <!-- Dashboard Counts Section-->
          <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
              <div class="row bg-white has-shadow">
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    
                    <div class="title"><span>Produsen<br>Baru</span>
                    </div>
                    <button type="button" id="addPelanggan" class="btn btn-primary">Add Data</button>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">

                    <div class="title"><span>Edit<br>Produsen</span>
                    </div>
                    <button type="button" id="editPelanggan" class="btn btn-success btn-flat">Edit Data</button>

                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    
                    <div class="title"><span>Delete<br>Produsen</span>
                    </div>
                    <button type="button" id="deletePelanggan" class="btn btn-danger btn-flat">Delete Data</button>

                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                   <div class="title"><span>Data<br>Produsen</span>
                    </div>
                    <button type="button" id="showPelanggan" class="btn btn-info btn-flat">Show Data</button>
                  </div>
                </div>
              </div>
              @include('feedback')
            </div>
          </section>
          <!-- Dashboard Header Section    -->
          

          <section class="dashboard-header" id="listPelanggan">
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
                      <h2 class="h3">List Produsen   </h2>
                      <div class="badge badge-rounded bg-green">Data       </div>
                    </div>
                    <div class="card-body no-padding">
                      <div class="item  align-items-center">
                        <a href="{{ url('cetakProdusen/xls') }}"><button class="btn btn-warning">Cetak Excel (.xls)</button></a>
                        &nbsp;
                        <a href="{{ url('cetakProdusen/xlsx') }}"><button class="btn btn-warning">Cetak Excel (.xlsx)</button></a>
                        <hr>
                        <table class="table table-hover" id="listDataProdusen">
                          <thead>
                            <th>No. </th>
                            <th>Kode Produsen</th>
                            <th>Tanggal Registrasi</th>
                            <th>Nama Produsen</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Keterangan</th>
                          </thead>
                          <tbody>
                            <?php $i = 1; foreach($listProdusen as $val){?>
                            <tr>
                              <td>{{ $i }}</td>
                              <td>{{ $val->kode_produsen }}</td>
                              <td>{{ $val->tgl_registrasi }}</td>
                              <td>{{ $val->nama }}</td>
                              <td>{{ $val->alamat }}</td>
                              <td>{{ $val->email }}</td>
                              <td>{{ $val->status }}</td>
                              <td>{{ $val->keterangan }}</td>
                            </tr>
                            <?php $i++; } ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>




          <section class="dashboard-header" id="listEditPelanggan">
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
                      <div class="badge badge-rounded bg-green">Edit       </div>
                    </div>
                    <form action="{{ url('data/produsen/update') }}" method="POST">
                    <div class="card-body no-padding">
                      <div class="item  align-items-center">
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-success" value="Simpan Perubahan">
                        <hr>
                        <table class="table table-hover" id="listDataProdusenEdit">
                          <thead>
                            <th>No. </th>
                            <th hidden="true">Kode Produsen</th>
                            <th>Nama Produsen</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Keterangan</th>
                          </thead>
                          <tbody>
                            <?php $i = 1; foreach($listProdusen as $val){?>
                            <tr>
                              <td>{{ $i }}. </td>
                              <td hidden="true"><input type="hidden" name="kode[]" value="{{ $val->kode_produsen }}" class="form-control"></td>
                              <td><input type="text" name="nama[]" value="{{ $val->nama }}" class="form-control"></td>
                              <td><input type="text" name="alamat[]" value="{{ $val->alamat }}" class="form-control"></td>
                              <td><input type="text" name="email[]" value="{{ $val->email }}" class="form-control"></td>
                              <td>
                              <select name="status[]" class="form-control">
                                @if($val->status == 'Aktif')
                                  <option value="Aktif" selected="true">Aktif</option>
                                  <option value="Non-Aktif">Non-Aktif</option>
                                @elseif($val->status == 'Non-Aktif')
                                  <option value="Aktif">Aktif</option>
                                  <option value="Non-Aktif" selected="true">Non-Aktif</option>
                                @endif
                              </select>
                            </td>
                              <td><input type="text" name="ket[]" value="{{ $val->keterangan }}" class="form-control"></td>
                            </tr>
                            <?php $i++; } ?>
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


          <section class="dashboard-header" id="listDeletePelanggan">
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
                      <h2 class="h3">Delete Produsen   </h2>
                      <div class="badge badge-rounded bg-green">Delete       </div>
                    </div>
                    <form action="{{ url('data/produsen/delete') }}" method="POST">
                      {{ csrf_field() }}
                    <div class="card-body no-padding">
                      <div class="item  align-items-center">
                        <input type="submit" class="btn btn-danger" value="Delete Produsen Yang Sudah Di Ceklis">
                        <hr>
                        <table class="table table-hover" id="listDataProdusenDelete">
                          <thead>
                            <th>&nbsp;</th>
                            <th>No. </th>
                            <th>Kode Produsen</th>
                            <th>Tanggal Registrasi</th>
                            <th>Nama Produsen</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Keterangan</th>
                          </thead>
                          <tbody id="listDataProdusenToBeDelete">
                            <?php $i = 1; foreach($listProdusen as $val){?>
                            <tr>
                              <td>
                              <div class="i-checks">
                              <input id="checkboxCustom1" type="checkbox" class="checkbox-template ceklis">
                              </div>
                              <div class="showResultHereKodeprodusen"></div>
                            </td>
                              <td>{{ $i }}</td>
                              <td>{{ $val->kode_produsen }}</td>
                              <td>{{ $val->tgl_registrasi }}</td>
                              <td>{{ $val->nama }}</td>
                              <td>{{ $val->alamat }}</td>
                              <td>{{ $val->email }}</td>
                              <td>{{ $val->status }}</td>
                              <td>{{ $val->keterangan }}</td>
                            </tr>
                            <?php $i++; } ?>
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



          <section class="dashboard-header" id="formAddPelanggan">
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
                      <form action="{{ url('data/produsen/simpan') }}" method="POST">
                      {{ csrf_field() }}
                      <div class="item  align-items-center">
                        <button type="button" data-toggle="modal" data-target="#formPelanggan" class="btn btn-primary">Buka Form</button>
                        <button type="submit" class="btn btn-success">Simpan</button>

                        <button type="button" data-toggle="modal" data-target="#modalCSV" class="btn btn-info pull-right">Import Dari CSV</button>

                        <button type="button" data-toggle="modal" data-target="#modalExcel" class="btn btn-danger pull-right">Import Dari Excel</button>
                        <hr>
                        <table class="table table-hover" id="listAddedProdusen">
                          <thead>
                            <tr>
                            <th>Nama Produsen</th>
                            <th>Alamat Produsen</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                          </tr>
                          </thead>
                          <tbody id="munculKanHasilProdusen">
                            
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
                              <h4 id="exampleModalLabel" class="modal-title">Form Input Data Produsen</h4>
                              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                              <p>Isi data data untuk Produsen.</p>
                              
                                <div class="form-group">
                                  <input type="text" placeholder="Nama produsen" id="nm_produsen" class="form-control">
                                </div>
                                <div class="form-group">
                                  <input type="text" placeholder="Alamat produsen" id="alm_produsen" class="form-control">
                                </div>
                                <div class="form-group">
                                  <input type="text" placeholder="Email produsen" id="ema_produsen" class="form-control">
                                </div>
                                <div class="form-group">
                                  <select id="st_produsen" class="form-control">
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
                              <button type="button" id="tambahKeTableProdusen" class="btn btn-primary">Tambahkan</button>
                            </div>
                          </div>
                        </div>
                      </div>
                
                  <div id="modalCSV" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                        <div role="document" class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 id="exampleModalLabel" class="modal-title">Input data produsen menggunakan CSV</h4>
                              <form action="{{ url('data/produsen/import') }}" method="POST" enctype="multipart/form-data">
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
                              <h4 id="exampleModalLabel" class="modal-title">Input data produsen menggunakan Excel</h4>
                              <form action="{{ url('data/produsen/importExcel') }}" method="POST" enctype="multipart/form-data">
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






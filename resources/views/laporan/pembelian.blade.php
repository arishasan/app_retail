@extends('templates/header')
@section('content')
    
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Laporan Pembelian</h2>
            </div>
          </header>
          <!-- Dashboard Counts Section-->
          

          <section class="dashboard-header">
            <div class="container-fluid">
               @include('feedback')
               <div id="showFeedback">
                 
               </div>
              <div class="row">
  
              <div class="col-lg-4">
                  <div class="articles card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard4" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h2 class="h3">Cetak Semua</h2>
                      <div class="badge badge-rounded bg-green">Tools       </div>
                    </div>
                    <div class="card-body">
                        
                          
                          <a href="{{ url('cetakPembelianALL') }}" target="_blank" class="btn btn-primary">CETAK</a>
                        
                        <br>
                       
                          <select id="methodExport" class="form-control">
                            <option value="">[ Method Export ]</option>
                            <option value="xls">.xls</option>
                            <option value="xlsx">.xlsx</option>
                            <option value="csv">.csv</option>
                          </select>
                          <a href="#" id="exportMethod" class="btn btn-warning">EXPORT</a>
                      
                        
                        <br/>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-5">
                  <div class="articles card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard4" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h2 class="h3">Cetak Berdasarkan Tanggal</h2>
                      <div class="badge badge-rounded bg-green">Tools       </div>
                    </div>
                    <div class="card-body">
                      <span>Tanggal Awal</span>
                        <input type="date" id="tanggal_awalPembelian" class="form-control">
                        <br/>
                        <span id="huruf_tanggal_akhirPembelian">Tanggal Akhir</span>
                        <input type="date" id="tanggal_akhirPembelian" class="form-control">
                      </div>
                    </div>
                  </div>



                  <div class="col-lg-3" id="percetakan2">
                  <div class="articles card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard4" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h2 class="h3">Execute</h2>
                      <div class="badge badge-rounded bg-green">Tools       </div>
                    </div>
                    <div class="card-body">
                        
                        <a href="#" target="_blank" id="cetakButtonPembelian" class="btn btn-primary">CETAK</a>
                        
                        <br>
                       
                          <select class="form-control methodExport233">
                            <option value="">[ Method Export ]</option>
                            <option value="xls">.xls</option>
                            <option value="xlsx">.xlsx</option>
                            <option value="csv">.csv</option>
                          </select>
                          <a href="#" class="btn btn-warning exportMethod233">EXPORT</a>

                      </div>
                    </div>
                  </div>


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
                      <h2 class="h3">Export Laporan pembelian   </h2>
                      <div class="badge badge-rounded bg-green">Laporan       </div>
                    </div>
                    <div class="card-body no-padding">
                      <div class="item  align-items-center">
                        
                        <i>Klick tombol cetak di salah satu data. Untuk mencetak detail.</i>
                        <hr>
                        <table class="table table-hover" id="listLaporanPembelian">
                          <thead>
                            <tr>
                              <th>No. </th>
                              <th>Kode Pembelian</th>
                              <th>Tanggal Pembelian</th>
                              <th>Kode Produsen</th>
                              <th>Pilihan</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            $i = 1;
                            foreach ($listLaporan as $key => $value) {
                              ?>
                                <tr>
                                  <td><?php echo $i ?>.</td>
                                  <td><?php echo $value->kode_pembelian ?></td>
                                  <td><?php echo $value->tgl_pembelian ?></td>
                                  <td><?php echo $value->kode_produsen ?></td>
                                  <td><a href="{{ url('cetakPembelian') }}/<?php echo $value->kode_pembelian ?>" class="btn btn-info btn-sm" target="_blank">Cetak</a></td>
                                </tr>
                              <?php
                              $i++;
                            }
                            ?>
                          </tbody>
                        </table>
                      </div>
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
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
                       

                      

@endsection






@extends('templates/header')
@section('content')
    
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Transaksi Pembayaran</h2>
            </div>
          </header>
          <form action="{{ url('transaksi/pembayaran') }}" method="POST">
            {{ csrf_field() }}
          <!-- Dashboard Counts Section-->
          
          @include('modal/pembayaran')      
  
          <section class="dashboard-header">
            <div class="container-fluid">
               @include('feedback')
               <div id="showFeedback">
                 
               </div>
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
                      <h2 class="h3">Pembayaran  </h2>
                      <div class="badge badge-rounded bg-green">Transaksi       </div>
                    </div>
                    <div class="card-body no-padding">
                      <div class="item  align-items-center">
                        <button type="button" class="btn btn-info" id="takeSales">Ambil Data Penjualan</button>
                        <hr>
                        <div class="col-lg-12">
                          <div class="card">
                            <div class="card-close">
                              <div class="dropdown">
                                <button type="button" id="closeCard5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                <div aria-labelledby="closeCard5" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                              </div>
                            </div>
                            <div class="card-header d-flex align-items-center">
                              <h3 class="h4">Information</h3>
                            </div>
                            <div class="card-body">
                                
                                <div class="form-group row">
                                  <label class="col-sm-3 form-control-label">Kode Penjualan</label>
                                  <div class="col-sm-9">
                                    <input type="text" readonly="" name="kode_penjualan" id="kode_penjualan" placeholder="Kode Penjualan" class="form-control">
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label class="col-sm-3 form-control-label">Kode Pelanggan</label>
                                  <div class="col-sm-9">
                                    <input type="text" readonly="" name="kode_pelanggan" id="kode_pelanggan" placeholder="Kode Pelanggan" class="form-control">
                                  </div>
                                </div>
                                <div class="line"></div>
                                <div class="form-group row">
                                  <label class="col-sm-3 form-control-label">Nama Pelanggan</label>
                                  <div class="col-sm-9">
                                    <input type="text" readonly="" name="nama_pelanggan" id="nama_pelanggan" placeholder="Nama Pelanggan" class="form-control">
                                  </div>
                                </div>
                                <div class="line"></div>
                               <div class="form-group row">
                                  <label class="col-sm-3 form-control-label">Tipe Pembayaran</label>
                                  <div class="col-sm-9">
                                    <input type="text" readonly="" name="tipe" id="tipe" placeholder="Tipe Pembayaran" class="form-control">
                                  </div>
                                </div>
                                <div class="line"></div>  
                                <hr>
                            </div>
                          </div>
                        </div>
                       
                        
                      </div>
                    </div>
                  </div>
                </div>


                <!-- NEXT -->
  
                <div class="col-lg-4">
                  <div class="articles card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard4" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h2 class="h3">Keterangan</h2>
                      <div class="badge badge-rounded bg-green">Information       </div>
                    </div>
                    <div class="card-body no-padding">
                      <div class="item  align-items-center" id="produk">
                        
                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Diskon</label>
                                <div class="col-sm-9">
                                    <div class="form-group">
                                      <div class="input-group"><span class="input-group-addon"><b>Rp,- </b></span>
                                        <input type="text" placeholder="Diskon > 20000 = 3%" id="diskon" name="diskon" class="form-control" readonly="true">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Pajak</label>
                                <div class="col-sm-9">
                                    <div class="form-group">
                                      <div class="input-group"><span class="input-group-addon"><b>Rp,- </b></span>
                                        <input type="text" placeholder="Pajak (Auto Calculate) 2%" id="pajak" name="pajak" class="form-control" readonly="true">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="line"></div>
                                <hr>
                                <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Total Bayar</label>
                                <div class="col-sm-9">
                                    <div class="form-group">
                                      <div class="input-group"><span class="input-group-addon"><b>Rp,- </b></span>
                                        <input type="text" placeholder="Total Bayar Muncul Di Sini" name="totBayar" id="totBayar" class="form-control" readonly="true">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Sudah di Bayar</label>
                                <div class="col-sm-9">
                                    <div class="form-group">
                                      <div class="input-group"><span class="input-group-addon"><b>Rp,- </b></span>
                                        <input type="text" placeholder="Sudah Bayar Muncul Di Sini" name="sudahBayar" id="sudahBayar" class="form-control" readonly="true">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <h1><center><code><div id="highlightTotalBayar">SISA/TOTAL BAYAR MUNCUL DI SINI</div></code></center></h1>
                                <hr>
                                <input type="hidden" name="statusPembayaran" id="statusPembayaran">
                                <h1 style="border:1px solid black"><center><div id="highlightStatusBayar">STATUS PEMBAYARAN MUNCUL DI SINI</div></center></h1>
                                <hr>
                                <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Dibayarkan</label>
                                <div class="col-sm-9">
                                    <div class="form-group">
                                      <div class="input-group"><span class="input-group-addon"><b>Rp,- </b></span>
                                        <input type="text" placeholder="Dibayarkan" name="diBayar" id="diBayar" class="form-control" required="true">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <button type="submit" id="buttonBayar" class="btn btn-success form-control">BAYAR</button>
                                <div id="munculTombolNOTA"></div>
                      </div>
                    </div>
                  </div>
                  </div>
                  
                  <!-- EMD -->
                  

                  <!-- NEXT -->
  
                <div class="col-lg-8">
                  <div class="articles card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard4" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h2 class="h3">List produk yang di beli</h2>
                      <div class="badge badge-rounded bg-green">Information       </div>
                    </div>
                    <div class="card-body no-padding">
                      <div class="item  align-items-center" id="produkYangAdaDetailnya">
                        
                        <table class="table table-hover" id="dTable">
                          <thead>
                            <tr>
                              <th>Kode Detail</th>
                              <th>Kode Produk</th>
                              <th>Nama Produk</th>
                              <th>Harga jual</th>
                              <th>Qty</th>
                              <th>SubTotal</th>
                            </tr>
                          </thead>
                          <tbody id="showedDetailHere">
                            
                          </tbody>
                        </table>
                        
                      </div>
                    </div>
                  </div>
                  </div>
                  
                  <!-- EMD -->
                 

          
                  
                
              </div>
            </div>
          </section>


           </form>

         
                       
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
                      

@endsection






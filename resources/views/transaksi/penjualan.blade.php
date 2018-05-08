@extends('templates/header')
@section('content')
    
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Transaksi Penjualan</h2>
            </div>
          </header>
          <form action="{{ url('transaksi/penjualan') }}" method="POST">
            {{ csrf_field() }}
          <!-- Dashboard Counts Section-->
          
          @include('modal/modalpenjualan')

          <section class="dashboard-header">
            <div class="container-fluid">
               @include('feedback')
               
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
                      <h2 class="h3">Penjualan Produk  </h2>
                      <div class="badge badge-rounded bg-green">Transaksi       </div>
                    </div>
                    <div class="card-body no-padding">
                      <div class="item  align-items-center">
                        <button type="button" class="btn btn-info" id="takeCustomer">Ambil Data Pelanggan</button>
                        <button type="submit"  class="btn btn-success pull-right">Submit</button>
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
                                  <label class="col-sm-3 form-control-label">Kode Pelanggan</label>
                                  <div class="col-sm-9">
                                    <input type="text" readonly="" name="kode_pelanggan" id="kode_pelanggan" placeholder="Kode Pelanggan" class="form-control">
                                  </div>
                                </div>
                                <div class="line"></div>
                                <div class="form-group row">
                                  <label class="col-sm-3 form-control-label">Nama Pelanggan</label>
                                  <div class="col-sm-9">
                                    <input type="text" readonly="" name="nama_pelanggan" id="nama_pelanggan" placeholder="nama Pelanggan" class="form-control">
                                  </div>
                                </div>
                                <div class="line"></div>
                                <div class="form-group row">
                                  <label class="col-sm-3 form-control-label">Tipe Pembayaran</label>
                                  <div class="col-sm-9 select">
                                    <select name="tipe_pembayaran" class="form-control">
                                      <option value="">-</option>
                                      <option value="Tunai">Tunai</option>
                                      <option value="Kredit">Kredit</option>
                                    </select>
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
  
                <div class="col-lg-12">
                  <div class="articles card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard4" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h2 class="h3">List Produk</h2>
                      <div class="badge badge-rounded bg-green">Data       </div>
                    </div>
                    <div class="card-body no-padding">
                      <div class="item  align-items-center" id="produk">
                        
                        <table class="table table-hover" id="listProdukPenjualan">
                          <thead>
                            <tr>
                              <th>No. </th>
                              <th>Kode Produk</th>
                              <th>Nama Produk</th>
                              <th>Jenis Produk</th>
                              <th>Harga Jual</th>
                              <th>Stok</th>
                              <th>Aksi</th>
                            </tr>
                          </thead>
                          <tbody id="listProdukTobeSelled">
                            <?php
                            $i = 1;
                            foreach ($listBarang as $key => $value) {
                              ?>
                                  <tr>
                                    <td><?php echo $i ?>.</td>
                                    <td><?php echo $value->kode_produk ?></td>
                                    <td><?php echo $value->nama ?></td>
                                    <td><?php echo $value->jenis_produk ?></td>
                                    <td><?php echo $value->harga_jual ?></td>
                                    <td><?php echo $value->stok ?></td>
                                    <td>
                                      <button type="button" class="btn btn-primary pilihBarang">CART!</button>
                                    </td>
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
                  <div id="showFeedback">
                 
                 </div>
                  </div>
                  
                  <!-- EMD -->
                  
                  <div class="col-lg-7">
                  <div class="articles card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard4" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h2 class="h3">Keranjang Belanja</h2>
                      <div class="badge badge-rounded bg-green">Holder       </div>
                    </div>
                    <div class="card-body no-padding">
                      <div class="item  align-items-center">
                        <table class="table table-hover" id="keranjang">
                          <thead>
                            <tr>
                              <th>&nbsp;</th>
                              <th>Kode Produk</th>
                              <th>Nama Produk</th>
                              <th>Harga Jual</th>
                              <th>Qty</th>
                              <th>SubTotal</th>
                            </tr>
                          </thead>
                          <tbody id="listProdukKeranjang">
                            <tr>
                              <td colspan="6"><center>Drag ke sini</center></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
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
                      <h2 class="h3">Price holder</h2>
                      <div class="badge badge-rounded bg-green">Information       </div>
                    </div>
                    <div class="card-body no-padding">
                      <div class="item  align-items-center" id="holderSub">
                      <button type="button" id="resetCounter" class="btn btn-danger btn-sm">RESET COUNTER</button>
                      <hr>
                        <div class="form-group row">
                                <label class="col-sm-3 form-control-label">SubTotal</label>
                                <div class="col-sm-9">
                                    <div class="form-group">
                                      <div class="input-group"><span class="input-group-addon"><b>Rp,- </b></span>
                                        <input type="text" placeholder="SubTotal Penjumlahan Item" id="subTotal" name="subTotal" class="form-control" readonly="true">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <hr>
                        
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
                                <h1><center><code><div id="highlightTotalBayar">TOTAL BAYAR MUNCUL DI SINI</div></code></center></h1>

                      </div>
                    </div>
                  </div>
                  </div>
                
              </div>
            </div>
          </section>


           </form>

         
                       

                      

@endsection






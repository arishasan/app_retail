@extends('templates/header')
@section('content')
    
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Transaksi Pembelian</h2>
            </div>
          </header>
          <!-- Dashboard Counts Section-->
          
          @include('modal/modalPembelianProduk')

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
                    <form action="{{ url('transaksi/pembelian/execute') }}" method="POST" id="f-pembelian">
                      {{ csrf_field() }}
                    <div class="card-header d-flex align-items-center">
                      <h2 class="h3">Pembelian Barang (Produsen)   </h2>
                      <div class="badge badge-rounded bg-green">Transaksi       </div>
                    </div>
                    <div class="card-body no-padding">
                      <div class="item  align-items-center">
                        <button type="button" class="btn btn-info" id="takeProduk">Tambah Produk</button>
                        <button type="button" id="simpanPembelian" class="btn btn-success pull-right">Submit</button>
                        <hr>
                        <span>Produsen</span>
                        <select name="produsen" class="form-control">
                          @foreach($listProdusen as $val)
                          <option value="{{ $val->kode_produsen }}">{{ $val->nama }}</option>
                          @endforeach
                        </select>
                        <hr>
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th>&nbsp;</th>
                              <th>Kode Produk</th>
                              <th>Nama Produk</th>
                              <th>Jenis Produk</th>
                              <th>Qty</th>
                            </tr>
                          </thead>
                          <tbody id="appendProdukHere">
                            
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


          <section class="dashboard-header">
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
                      <h2 class="h3">Record Pembelian Barang (Produsen)   </h2>
                      <div class="badge badge-rounded bg-green">Record       </div>
                    </div>
                    <div class="card-body no-padding">
                      <div class="item  align-items-center">
                        <button type="button" class="btn btn-primary takeProduk" id="takeProduk" title="Refresh"><i class="icon-clock"></i></button>
                        <hr>
                        <div id="dataRecordPembelian">
                          <code><center>Record Will be showed here..</center></code>
                        </div>
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






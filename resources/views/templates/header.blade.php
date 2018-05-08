<?php
$data = \App\userModel::getUserById();

foreach ($data as $key => $value) {
	$username = $value->username;
	$akses = $value->akses;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>App. Retail</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('Assets') }}/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="{{ asset('Assets') }}/css/fontastic.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('Assets') }}/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('Assets') }}/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('Assets') }}/css/custom.css">
    <!-- Favicon-->
    <link rel="stylesheet" href="{{ asset('Assets') }}/plugins/datatables/jquery.dataTables.css">
    <link rel="stylesheet" href="{{ asset('Assets') }}/plugins/jQueryUI/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('Assets/') }}/morris/morris.css">
    <link rel="shortcut icon" href="favicon.png">

    @stack('style')
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page home-page">
      <!-- Main Navbar-->
      <header class="header">
        <nav class="navbar">
          <!-- Search Box-->
          <!-- <div class="search-box">
            <button class="dismiss"><i class="icon-close"></i></button>
            <form id="searchForm" action="#" role="search">
              <input type="search" placeholder="What are you looking for..." class="form-control">
            </form>
          </div> -->
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand --><a href="{{ url('/') }}" class="navbar-brand">
                  <div class="brand-text brand-big"><span>App. </span><strong> Retail</strong></div>
                  <div class="brand-text brand-small"><strong>AR</strong></div></a>
                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Search-->
                <!-- <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="icon-search"></i></a></li> -->
                <!-- Notifications-->
                <!-- <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell-o"></i><span class="badge bg-red">12</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification">
                          <div class="notification-content"><i class="fa fa-envelope bg-green"></i>You have 6 new messages </div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification">
                          <div class="notification-content"><i class="fa fa-twitter bg-blue"></i>You have 2 followers</div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification">
                          <div class="notification-content"><i class="fa fa-upload bg-orange"></i>Server Rebooted</div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification">
                          <div class="notification-content"><i class="fa fa-twitter bg-blue"></i>You have 2 followers</div>
                          <div class="notification-time"><small>10 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>view all notifications                                            </strong></a></li>
                  </ul>
                </li> -->
                <!-- Messages                        -->
                <!-- <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope-o"></i><span class="badge bg-orange">10</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="{{ asset('Assets') }}/img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Jason Doe</h3><span>Sent You Message</span>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="{{ asset('Assets') }}/img/avatar-2.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Frank Williams</h3><span>Sent You Message</span>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="{{ asset('Assets') }}/img/avatar-3.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Ashley Wood</h3><span>Sent You Message</span>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>Read all messages    </strong></a></li>
                  </ul>
                </li> -->
                <!-- Logout    -->
                <li class="nav-item">
                  <form action="{{ url('logout') }}" method="POST">
                    {{ csrf_field() }}
                    &nbsp;&nbsp; <button type="submit" class="btn btn-primary">Logout <i class="fa fa-sign-out"></i></button>
                  </form>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="page-content d-flex align-items-stretch">
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="{{ asset('Assets') }}/img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4">{{ $username }}</h1>
              <p>{{ $akses }}</p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
          <ul class="list-unstyled">
              @if(empty(Request::segment(1)))
              <li class="active">
              @else
              <li>
              @endif
             <a href="{{ url('/') }}"><i class="icon-home"></i>Home</a></li>
          </ul>
          
          @if($akses == 'admin' || $akses == 'superuser')
          
          <span class="heading">Data</span>
          <ul class="list-unstyled">
              @if(Request::segment(1) == 'data' AND Request::segment(2) == 'pelanggan')
              <li class="active">
              @else
              <li>
              @endif <a href="{{ url('data/pelanggan') }}"> <i class="icon-list"></i>Pelanggan </a></li>

              @if(Request::segment(1) == 'data' AND Request::segment(2) == 'produsen')
              <li class="active">
              @else
              <li>
              @endif <a href="{{ url('data/produsen') }}"> <i class="icon-form"></i>Produsen </a></li>

              @if(Request::segment(1) == 'data' AND Request::segment(2) == 'produk')
              <li class="active">
              @else
              <li>
              @endif <a href="{{ url('data/produk') }}"> <i class="icon-website"></i>Produk </a></li>
          </ul>

          @endif

          
          @if($akses == 'operator' || $akses == 'superuser')
          
          <span class="heading">Transaksi</span>
          <ul class="list-unstyled">

              @if(Request::segment(1) == 'transaksi' AND Request::segment(2) == 'pembelian')
              <li class="active">
              @else
              <li>
              @endif <a href="{{ url('transaksi/pembelian') }}"> <i class="icon-padnote"></i>Pembelian Barang (Produsen) </a></li>

              @if(Request::segment(1) == 'transaksi' AND Request::segment(2) == 'penjualan')
              <li class="active">
              @else
              <li>
              @endif <a href="{{ url('transaksi/penjualan') }}"> <i class="icon-check"></i>Penjualan </a></li>


              @if(Request::segment(1) == 'transaksi' AND Request::segment(2) == 'pembayaran')
              <li class="active">
              @else
              <li>
              @endif <a href="{{ url('transaksi/pembayaran') }}"> <i class="icon-bill"></i>Pembayaran </a></li>
              
          </ul>

          @endif

          @if($akses == 'admin' || $akses == 'superuser')
          
          <span class="heading">Laporan</span>
          <ul class="list-unstyled">
              @if(Request::segment(1) == 'laporan' AND Request::segment(2) == 'pembelian')
              <li class="active">
              @else
              <li>
              @endif <a href="{{ url('laporan/pembelian') }}"> <i class="icon-check"></i>Pembelian </a></li>
            

              @if(Request::segment(1) == 'laporan' AND Request::segment(2) == 'penjualan')
              <li class="active">
              @else
              <li>
              @endif <a href="{{ url('laporan/penjualan') }}"> <i class="icon-bill"></i>Penjualan </a></li>
          </ul>

          @endif
          
          <span class="heading">Extras</span>
          <ul class="list-unstyled">
            <li> <a href="#" data-toggle="modal" data-target="#formAkun"> <i class="icon-flask"></i>Configurasi Akun </a></li>

          @if($akses == 'superuser')
            <li> <a href="#" data-toggle="modal" data-target="#dataAkun"> <i class="icon-list"></i>Data User </a></li>
            <li> <a href="#" data-toggle="modal" data-target="#addAkun"> <i class="icon-user"></i>Tambah User </a></li>
          </ul>
          @else
          </ul>
          @endif

        </nav>

                      <div id="formAkun" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                        <div role="document" class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 id="exampleModalLabel" class="modal-title">Ubah Data Akun</h4>
                              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                            </div>
                            <form action="{{ url('ubahData') }}" method="POST">
                            <div class="modal-body">
                              <p>Biarkan password kosong jika tidak ingin mengubah password.</p>
                              {{ csrf_field() }}
                                <div class="form-group">
                                  <input type="text" placeholder="Username" value="{{ $username }}" name="username" class="form-control">
                                </div>
                                <div class="form-group">
                                  <input type="password" placeholder="Password Baru (Tinggalkan apabila tidak ubah)" name="password" class="form-control">
                                </div>
                                <div class="form-group">
                                  <input type="password" placeholder="Konfirmasi Password" name="c-password" class="form-control">
                                </div>
                                
                            </div>
                            <div class="modal-footer">
                              <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                              <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                          </div>
                        </form>
                        </div>
                      </div>


                      <div id="dataAkun" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                        <div role="document" class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 id="exampleModalLabel" class="modal-title">Data Akun</h4>
                              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                            </div>
                           
                            <div class="modal-body">
                              
                              <table class="table table-hover" id="listDataUser">
                                <thead>
                                  <tr>
                                    <th>ID User</th>
                                    <th>Username</th>
                                    <th>Akses</th>
                                    <th>Aksi</th>
                                    <th>&nbsp;</th>
                                  </tr>
                                </thead>
                                <tbody id="listUser">
                                  <?php $listUser = \App\modelShow::getListUsers(); ?>
                                  @foreach($listUser as $val)
                                    <tr>
                                      <td>{{ $val->id_user }}</td>
                                      <td>{{ $val->username }}</td>
                                      <td>{{ $val->akses }}</td>
                                      <td><button class="btn btn-warning btn-sm deleteUser">X</button></td>
                                      <td class="konfirmasiDelete"></td>
                                    </tr>
                                  @endforeach
                                </tbody>
                              </table>
                                
                            </div>
                            <div class="modal-footer">
                              <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>





                      <div id="addAkun" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                        <div role="document" class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 id="exampleModalLabel" class="modal-title">Add Akun</h4>
                              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                            </div>
                           <form action="{{ url('addUser') }}" method="POST">
                            <div class="modal-body">
                              {{ csrf_field() }}
                              <p>Isi data data untuk user baru.</p>
                              
                                <div class="form-group">
                                  <input type="text" placeholder="Username" name="username" class="form-control">
                                </div>
                                
                                <div class="form-group">
                                  <input type="text" placeholder="Password" name="password" class="form-control">
                                </div>

                                <div class="form-group">
                                  <select name="akses" class="form-control">
                                    <option value="">[ Pilih hak akses ]</option>
                                    <option value="operator">Operator</option>
                                    <option value="admin">Admin</option>
                                    <option value="superuser">Superuser</option>
                                  </select>
                                </div>
                                
                            </div>
                            <div class="modal-footer">
                              <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                              <button type="submit" class="btn btn-info">Submit</button>
                            </div>
                          </div>
                          </form>
                        </div>
                      </div>

        <div class="content-inner">
          @yield('content')
        

        @include('templates/footer')

        
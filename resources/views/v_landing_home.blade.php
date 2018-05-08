@extends('templates/header')
@section('content')
<?php date_default_timezone_set('Asia/Jakarta') ?>
<!-- {{ $version }} USED TO SHOW LARAVEL VERSION -->
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Dashboard<div class="pull-right">Laravel Version : <b style="font-size: 20px">{{ $version }}</b></div></h2>

            </div>
          </header>
          <!-- Dashboard Counts Section-->
          <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
              @include('feedback')
              <div class="row bg-white has-shadow">
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-violet"><i class="icon-user"></i></div>
                    <div class="title"><span style="font-size: 17px">Jumlah<br>Pelanggan</span>
                      <div class="progress">
                        <div role="progressbar" id="progressPelanggan" style="width: 70%; height: 4px;" aria-valuenow="{#val.value}" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-violet"></div>
                      </div>
                    </div>
                    <!-- {{ Request::ip() }} -->
                    <div class="number"><strong id="jmlPel">{{ $jmlPel }}</strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-red"><i class="icon-padnote"></i></div>
                    <div class="title"><span style="font-size: 17px">Jumlah<br>Produsen</span>
                      <div class="progress">
                        <div role="progressbar" id="progressProdusen" style="width: 70%; height: 4px;" aria-valuenow="{#val.value}" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-red"></div>
                      </div>
                    </div>
                    <div class="number"><strong id="jmlProd">{{ $jmlProd }}</strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-green"><i class="icon-bill"></i></div>
                    <div class="title"><span style="font-size: 17px">Jumlah<br>Produk</span>
                      <div class="progress">
                        <div role="progressbar" id="progressProduk" style="width: 70%; height: 4px;" aria-valuenow="{#val.value}" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-green"></div>
                      </div>
                    </div>
                    <div class="number"><strong id="jmlProduk">{{ $jmlProduk }}</strong></div>
                  </div>
                </div>

                <?php

                $jml = '';
                $waktu = '';
                foreach ($count as $key => $value) {
                  $jml = $value->login_count;
                  $waktu = $value->last_login;
                }

                ?>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-orange"><i class="icon-check"></i></div>
                    <div class="title"><span style="font-size: 17px">Banyak<br>Login</span>
                      <div class="progress">
                        <div role="progressbar" id="progressBarLogin" style="width: 100%; height: 4px;" aria-valuenow="{#val.value}" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-orange"></div>
                      </div>
                    </div>
                    <div class="number"><strong id="jmlLogin">{{ $jml }}</strong></div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Dashboard Header Section    -->
          <section class="dashboard-header">
            <div class="container-fluid">
              <div class="row">
                <!-- Statistics -->
                <div class="statistics col-lg-3 col-12">
                  <div class="statistic d-flex align-items-center bg-white has-shadow">
                    <div class="icon bg-red"><i class="fa fa-tasks"></i></div>
                    <div class="text"><strong>{{ Request::ip() }}</strong><br><small>IP Address</small></div>
                  </div>
                  <div class="statistic d-flex align-items-center bg-white has-shadow">
                    <div class="icon bg-green"><i class="fa fa-database"></i></div>
                    <div class="text"><strong>
                      <?php 
                      try {
                        // echo BrowserDetect::browserName();
                        echo "Nothing";
                      } catch (Exception $e) {
                        echo "Server Sibuk";
                      }
                       ?>
                    </strong><br><small>Browser</small></div>
                  </div>
                  <div class="statistic d-flex align-items-center bg-white has-shadow">
                    <div class="icon bg-orange"><i class="fa fa-paper-plane-o"></i></div>
                    <div class="text"><strong>
                      <?php 
                      try {
                        // echo BrowserDetect::osFamily();
                        echo "Nothing";
                      } catch (Exception $e) {
                        echo "Server Sibuk";
                      }
                       ?>
                    </strong><br><small>Operating System</small></div>
                  </div>
                </div>
                <!-- Line Chart            -->
                <div class="chart col-lg-6 col-12">
                  <div class="line-chart bg-white d-flex align-items-center justify-content-center has-shadow">
                    <div id="lineCahrt" style="height: 270px"></div>
                  </div>
                </div>
                <div class="chart col-lg-3 col-12">
                  <!-- Bar Chart   -->
                  <div class="bar-chart has-shadow bg-white">
                    <div class="title"><strong class="text-violet"><i id="liveClock"></i> &nbsp; <b id="keteranganWaktu"></b></strong><br><small>Jam Sekarang</small></div>
                    
                  </div>
                  <!-- Numbers-->
                  <div class="statistic d-flex align-items-center bg-white has-shadow">
                    <div class="icon bg-green"><i class="fa fa-info"></i></div>
                    <div class="text"><strong><span style="font-size: 18px" id="greet"></span></strong><br><small>Greetings</small></div>
                  </div>

                  <div class="statistic d-flex align-items-center bg-white has-shadow">
                    <div class="icon bg-orange"><i class="fa fa-calendar-o"></i></div>
                    <div class="text"><strong style="font-size: 18px">{{ $waktu }}</strong><br><small>Last Login</small></div>
                  </div>
                </div>


              </div>
            </div>
          </section>
         
          
          <!-- Feeds Section-->
          <section class="feeds no-padding-top">
            <div class="container-fluid">
              <div id="showFeedback">
                
              </div>
              <div class="row">
               
                <!-- Check List -->
                <div class="col-lg-6">
                  <div class="checklist card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard5" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <form action="#" method="POST" id="addToDo">
                      {{ csrf_field() }}
                    <div class="card-header d-flex align-items-center">           
                      <h2 class="h3">To Do List &nbsp;<button type="button" id="simpanTodo" class="btn btn-primary btn-sm">Submit New To Do</button></h2>
                    </div>
                    <div class="card-body no-padding">
                        <div class="col-lg-12">
                          <div class="form-group-material">
                              <input id="register-username toDoNew" type="text" name="toDoNew" required="" class="input-material toDoNew">
                              <label for="register-username" class="label-material">New To Do (Max 6)</label>

                            </div>
                        </div>
                      </form>
                      <table>
                        <tbody id="todoShowed"></tbody>
                      </table>
                      <br>
                    </div>
                  </div>
                </div>
                
                <div class="col-lg-6">
                  <div class="recent-activities card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard8" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard8" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header">
                      <h3 class="h4">Recent Activities</h3>
                    </div>
                    <div class="card-body no-padding">
                      @foreach($listActivities as $val)

                      <?php
                      $full = false;
                      $now = new DateTime;
                      $ago = new DateTime($val->waktu);
                      $diff = $now->diff($ago);

                      $diff->w = floor($diff->d / 7);
                      $diff->d -= $diff->w * 7;

                      $string = array(
                        'y' => 'tahun',
                        'm' => 'bulan',
                        'w' => 'minggu',
                        'd' => 'hari',
                        'h' => 'jam',
                        'i' => 'menit',
                        's' => 'detik',
                      );

                      foreach ($string as $k => &$v) {
                        if($diff->$k){
                          $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? '' : '');
                        }else{
                          unset($string[$k]);
                        }
                      }

                      if(!$full) $string = array_slice($string,0,1);
                      $jamAkhir = $string ? implode(', ',$string) . ' yang lalu' : 'baru saja';
                      ?>
                      <div class="item">
                        <div class="row">
                          <div class="col-4 date-holder text-right">
                            <div class="icon"><i class="icon-clock"></i></div>
                            <div class="date"> <span>{{ date('d-m-Y H:i:s',strtotime($val->waktu)) }}</span><br><span class="text-info">{{ $jamAkhir }}</span></div>
                          </div>
                          <div class="col-8 content">
                            <h5>{{ $val->parent }}</h5>
                            <p>{{ $val->activity }}.</p>
                          </div>
                        </div>
                      </div>
                      @endforeach
                      
                    </div>
                  </div>
                </div>


              </div>
            </div>
          </section>




          <section class="client no-padding-top">
            <div class="container-fluid">
              <div class="row">
                <!-- Work Amount  -->
                
                <!-- Client Profile -->
                <div class="col-lg-3">
                  <div class="work-amount card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-body">
                      <h3 style="color: green">HOSTNAME</h3>
                      <div class="">
                        <br>
                        
                        <div class="text"><strong style="font-size: 18px;">{{ gethostname() }}</strong><br><span>Hostname</span></div>
                        <br>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Total Overdue             -->
                <div class="col-lg-3">
                  <div class="work-amount card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-body">
                      <h3 style="color: green">OS</h3>
                      <div class="">
                        <br>
                        <?php
                          $out = array();
                          exec("wmic cpu get DataWidth", $out);
                          $bits = strstr(implode("", $out), "64") ? 'x64' : 'x32';
                        ?>
                        <div class="text"><strong style="font-size: 18px;"><?php 
                        try {
                          // echo BrowserDetect::osFamily();
                          echo "Nothing";
                        } catch (Exception $e) {
                          echo "Server Sibuk";
                        }
                         ?>
                        {{ $bits }}</strong><br><span>Your OS Bit</span></div>
                        <br>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-3">
                  <div class="work-amount card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-body">
                      <h3 style="color: green">MEMORY USAGE</h3>
                      <div class="">

                        <br>
                        <div class="text"><strong style="font-size: 18px;"><i id="memoryUsage">{{ memory_get_peak_usage() }}</i></strong><br><span>Refresh every 3 sec</span></div>
                        <br>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-3">
                  <div class="work-amount card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-body">
                      <h3 style="color: green">PHP VERSION</h3>
                      <div class="">
                        <br>
                        
                        <div class="text"><strong style="font-size: 18px;">{{ phpversion() }}</strong><br><span>Your Server Php Version</span></div>
                        <br>
                      </div>
                    </div>
                  </div>
                </div>
          </section>
          
        

@endsection
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login: Retail</title>
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
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1>Login To Admin Area</h1>
                  </div>
                  <p>App. Retail</p>
                  @include('feedback')
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <form id="login-form" action="{{ url('login') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                      <input id="login-username" type="text" name="username" class="input-material">
                      <label for="login-username" class="label-material">User Name</label>
                    </div>
                    <div class="form-group">
                      <input id="login-password" type="password" name="password" class="input-material">
                      <label for="login-password" class="label-material">Password</label>
                    </div><input id="login" type="submit" class="btn btn-primary">
                    <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                  
                  <div class="i-checks">
                              <input id="checkboxCustom1" type="checkbox" name="remember" class="checkbox-template">
                              <label for="checkboxCustom1">Remember Me ?</label>
                            </div>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights text-center">
        <p>Design by <a href="https://bootstrapious.com/admin-templates" class="external">Bootstrapious</a></p>
        <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
      </div>
    </div>
    <!-- Javascript files-->
    <script src="{{ asset('Assets') }}/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <script src="{{ asset('Assets') }}/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="{{ asset('Assets') }}/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ asset('Assets') }}/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="{{ asset('Assets') }}/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="{{ asset('Assets') }}/js/front.js"></script>
  </body>
</html>
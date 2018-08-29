<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Login </title>

  <!-- Bootstrap CSS -->
  <link href="{{asset('admin/login/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="{{asset('admin/login/css/bootstrap-theme.css')}}" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="{{asset('admin/login/css/elegant-icons-style.css')}}" rel="stylesheet" />
  <link href="{{asset('admin/login/css/font-awesome.css')}}" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="{{asset('admin/login/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('admin/login/css/style-responsive.css')}}" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body class="login-img3-body">
  <div class="container">
    <form method="post" class="login-form" action="{{url('backend/auth/login')}}" >
      {{csrf_field()}}
      <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
        <p>
          @if(session('err'))
           <div class="alert alert-danger">
                {{session('err')}}
           </div> 
           @elseif(session('success'))
              <div class="alert alert-success">
                {{session('success')}}
           </div>              
          @endif </p>
        <div class="input-group">
            <span class="input-group-addon"><i class="icon_profile"></i></span>
            <input type="text" class="form-control" name="email" placeholder="Email" >         
        </div>
         <p style="color: red">{{ $errors->first('email') }}</p>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
        <p style="color: red">{{ $errors->first('password') }}</p>
        <label class="checkbox">
              <input type="checkbox" value="remember-me"> Remember me
              <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
        </label>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
        <br>
        <a href="{{asset('backend/register')}}">
          <button class="btn btn-info btn-lg btn-block" type="button">Signup</button>
        </a>
      </div>
    </form>
    <div class="text-right">  
    </div>
  </div>


</body>

</html>

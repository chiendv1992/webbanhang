<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>Register</title>
</head>
<link rel="stylesheet" type="text/css" href="{{asset('admin/register/css/dangky.css')}}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="{{asset('admin/register/js/jquery-1.11.1.min.js')}}"></script>
<body>
<div class="container"> 
 	<h1 class="text-center"> </h1> <br><br>
	<div class="row"> 
  	<div class="col-xs-12 col-sm-12 col-md-4 well well-sm col-md-offset-4"> 
   	<legend><a href="http://hocwebgiare.com/"><i class="glyphicon glyphicon-globe"></i></a> Register!
   	</legend> 
   	<form action="{{asset('backend/register')}}" method="post" class="form" role="form">  
   	{{csrf_field()}}   	
     	<input class="form-control" name="username" placeholder="Full Name"  type="text">
    	<input class="form-control" name="email" placeholder="Email" type="email"> 
    	<input class="form-control" name="password" placeholder="Password" type="password">   
    	
    <br> 
    <br> 
    <button class="btn btn-lg btn-primary btn-block" type="submit"> Register</button> 
    <br>
    <a href="{{asset('backend/auth/login')}}">
          <button class="btn btn-info btn-lg btn-block" type="button">Login</button>
        </a>
   </form> 
  </div> 
 </div>
</div>
</body>
</html>
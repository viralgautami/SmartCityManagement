<?php

	session_start();
	if(isset($_SESSION['auser']) && !empty($_SESSION['auser'])){
		header("Location:dashboard.php");
	}
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Admin | Login</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
  </head>

  <body>
	  <div id="login-page">
	  	<div class="container">
      
	  	
		      <form class="form-login" action="auth.php" method="post">
		        <h2 class="form-login-heading">sign in now</h2>
                  
		        <div class="login-wrap">
		            <input type="text" name="user" class="form-control" placeholder="User ID" autofocus>
		            <br>
		            <input type="password" name="pass" class="form-control" placeholder="Password"><br >
		            <input  name="login" class="btn btn-theme btn-block" type="submit">
		         
		        </div>
		      </form>	  	
	  	
	  	</div>
	  </div>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("assets/img/login-bg.jpg", {speed: 500});
    </script>


  </body>
</html>

<!-- <!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style type="text/css">
	body{
		background:linear-gradient(
		rgba(0, 0, 0, 0.7),
		rgba(0, 0, 0, 0.7)
		),
	url('test.jpg') no-repeat;
	background-size: cover;
	}
</style>
<body>
<div class="container" style="margin-top: 350px;margin-right:  190px; padding-top: 10px;">
	<form action="auth.php" method="post">
	
	<div class="row" >
	<div class="col-lg-6"style="padding-top: 25px;">
		<h4 style="color: white;text-align: center;font-weight: bold;">Admin Login</h4><br>
  <div class="form-group">
    <input type="text" class="form-control" name="user" placeholder="Enter User Name">
  </div>
</div>
</div>
	<div class="row">
	<div class="col-lg-6">
  <div class="form-group">
    <input type="password" class="form-control" name="pass" placeholder="Password">
    <div class="text-center">
    <button type="submit" class="btn btn-primary" style="margin-top: 25px;width: 50%">Submit</button>
    </div>
  </div>
</div>
</div>
  
</form>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html> -->
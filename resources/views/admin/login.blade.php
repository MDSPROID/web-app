<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="robots" content="index,nofollow"/>
	<meta name="copyright" content="This website has been registered and trademark of ALEXANDER PHOTOGRAFER "/>
    <meta name="author" content="ALEXANDER PHOTOGRAFER">
    <meta name="language" content="Indonesia">
    <meta name="revisit-after" content="7">
    <meta name="webcrawlers" content="all">
    <meta name="rating" content="general">
    <meta name="spiders" content="all">
	<title>Application Login</title>
	<link rel="stylesheet" type="text/css" href="<?php echo asset('assets/resource/css/style.css')?>">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
		body{
			background-color: #fbfbfb;
			background-size: cover;
			background-repeat: no-repeat;
			background-position: center;
			height: 100%;
			color:white;
		}
		.wll{
			margin-top: 50px;
		}
	</style>
</head>
<body>
<div class="container text-center wll">
	<center><img class="img-responsive" src="<?php echo asset('assets/logo_ap_black.png');?>" style="height:100px;"></center>
	<br>
	<form action="{{url('log_process')}}" method="post">
		@csrf
	<center>
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<div class="input-group" style="margin-bottom:10px;">
			<span class="input-group-addon lab gh"><span class="glyphicon glyphicon-user"></span></span>
			<input type="text" name="user_asm" class="form-resize form-control" placeholder="Username" required>
		</div>
		<div class="input-group" style="margin-bottom:10px;">
			<span class="input-group-addon lab gh"><span class="glyphicon glyphicon-lock"></span></span>
			<input type="password" name="pass_asm" class="form-resize form-control" placeholder="Password" required>
		</div>
		<div style="margin-bottom:10px;" class="text-center">
			<button class="btn btn-block btn-red"><i class="glyphicon glyphicon-log-in"></i> Masuk</button>
		</div>
	</div>
	<div class="col-md-4"></div>
	</center>
	</form>
	<div class="col-md-12" style="margin-top: 40px;">
		<p style="color:black" class="footer">
			Response Server time <strong>{{ (microtime(true) - LARAVEL_START) }}</strong> seconds.<br>
			App Version {{ Illuminate\Foundation\Application::VERSION }}
		</p>
	</div>
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<label style="display:;font-size: 14px;padding: 5px 0px;" class="col-md-12 col-xs-12 label label-warning gagal">{{Session::get('error')}}</label>
		<label style="display:;font-size: 14px;padding: 5px 0px;" class="col-md-12 col-xs-12 label label-success sukses">{{Session::get('success')}}</label>
	</div>
	<div class="col-md-4"></div>
</div>

</body>
</html>
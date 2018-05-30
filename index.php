<?php

session_start();
if (isset($_SESSION['login_user']))
    header("Location: welcome.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" href="images/icon.png">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Anderson Pest Prevention</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href='http://fonts.googleapis.com/css?family=Archivo+Narrow:400,700|Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/errorCheck.js" type="text/javascript"></script>
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<style>
.space{
	margin-bottom: 0; 
}

</style>
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header" class="container">
			<div id="logo">
				<a href="welcome.php"><img src="images/lgo3.png" height="100" width="180"></a>
			</div>
			<div id="menu">
			</div>
		</div>
	</div>
	<div id="page" class="container">
		<div id="content">
			<div id="box1">
				<h2 class="title"><a href="#">Anderson Pest Prevention</a></h2>
				<p>Kingston on spey based company offering quality pest control services.

					We offer a unique paperless system where you can access your pest control inspections 24/7 from anywhere there will also be a mobile app.

					All your reports, quotations, coshh, safety data sheets, rams, hygiene issues, proofing issues and environmental risk assements will be available all on your own hub rather than compiled in a folder.</p><br>
				<img src="images/md.jpg" height="150" width="120">
				<p class="space">David Anderson</p>
				<p>Managing Director</p>
			</div>
			<div>
			</div>
		</div>
		<div id="sidebar">
			<h2>Login</h2>
			<ul class="style3">
				<li class="first">
					<form id="login" action="javascript:validateLogin();">
						Username:<input type="text" name="username"><br>
						Password: <input type="password" name="password">
						<p id="warning"></p>
						<input type="submit" value="login">
					</form>
				</li>
				<li>
					<p class="date">Welcome</p>
					<p><a href="#">Welcome please login to your customer account above!</a></p>
					</li>
				<li>
					<p class="date">16-03-2017</p>
					<p><a href="#">This site is still under construction so if you find any bugs please email danyal1995@hotmail.co.uk</a></p>
				</li>
			</ul>
		</div>
	</div>
	<div id="footer">
		<p>Copyright (c) 2017 Anderson Pest Prevention</a>.</p>
	</div>
</div>
</body>
</html>

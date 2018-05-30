<?php

session_start();
if (!isset($_SESSION['login_user']))
    header("Location: index.php");

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
<style>
.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {  
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    height: 100%;
}

.dropdown:hover .dropbtn {
    	background: rgba(0,0,0,0.70);
}

.dropdown-content {
    display: none;
    position: absolute;
    background: black;
    min-width: 160px;
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown:hover .dropdown-content {
    display: block;
}
.space{
	margin-bottom: 0;
}
</style>
</head>
<body>

<div id="wrapper">
	<div id="header-wrapper">
		<div id="header" class="container">
			<div id="logo">
				<a href="welcome.php"><img src="images/lgo3.png" height="100" width="180"></a>
			</div>
			<div id="menu">
				<ul>
			    <li><a href="viewCosh.php" accesskey="3" title="">View Coshh</a></li>
				<?php
					if($_SESSION['accountType'] == "administrator"){
				?>
					<li><a href="uploadDoc.php" accesskey="2" title="">Upload Document</a></li>
                    <li><a href="viewReports.php" accesskey="3" title="">Treatment Reports</a></li>
	
					<?php 
					} 
					$conn = mysqli_connect("mysql5.gear.host", "app4", "Oo0dn-g0s?Dh", "app4");
					if ($conn->connect_error) {
					    die("Connection failed: " . $conn->connect_error);
					}
				    $cnt = $_SESSION['contract'];
					$sql = "SELECT * FROM risk WHERE contractNo = '$cnt'";
					$sql1 = "SELECT * FROM bait WHERE contractNo = '$cnt'";
					$sql2 = "SELECT * FROM siteplans WHERE contractNo = '$cnt'";
					$result = $conn->query($sql);
					$result1 = $conn->query($sql1);
					$result2 = $conn->query($sql2);
				    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
				    $row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
				    $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);

				if($_SESSION['accountType'] == "customer"){
					
					echo	"<li><div class='dropdown'>";
					echo    	 "<a href='#' class='dropbtn'>Documents</a>";
					echo    	 "<div class='dropdown-content'>";
					echo      		"<a href='viewReports.php'>Treatment Reports</a>";
					echo 			"<a href='".$row["risk"]."' accesskey='3'>Risk Assessment</a><br>";
					echo 			"<a href='".$row1["bait"]."' accesskey='3'>Bait Location</a>";
					echo      		"<a href='".$row2["sitePlan"]."'>Site Plan</a>";
					echo      		"<a href='viewCertificates.php'>Certificates</a>";
					echo    	"</div>";
					echo 	"</div></li>";
					} 
				?>
				</ul>
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
			<ul class="style3">
			<li class="first">
			<?php
				if($_SESSION['accountType'] == "administrator"){
			?>
			<h2>Register</h2>
				<form id="registerForm" action="javascript:registerCustomer();">
					Username: <input type="text" name="user" id="user">
					Contract No: <input type="text" name="conNo" id="conNo">
					Password: <input type="password" name="pass" id="pass">
					Password: <input type="password" name="pass2" id="pass2"><br>
					<p id="error"></p>
					<input type="submit" value="register">
				</form>
			<?php
				}
				else{
			?>
				<form action="logout.php" action="post">
					<input type="submit" value="Logout">
				</form>
			 <?php } ?>
				</li>
				<li>
				<?php
				if($_SESSION['accountType'] == "administrator"){
				?>
				<form action="logout.php" action="post">
					<input type="submit" value="Logout">
				</form>
			<?php
				}
				else{
			?>
				<p class="date">Welcome</p>
				<p><a href="#">Welcome to your Anderson Pest Prevention customer account here you will be able to see all your reports!</a></p>
			<?php } ?>
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

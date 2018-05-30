<?php

session_start();
if (!isset($_SESSION['login_user'])){
    header("Location: index.php");
}
if($_SESSION["accountType"] != "administrator"){
	header("Location: welcome.php");
}


?>

<!DOCTYPE html>

<head>
	<title>APP Login</title>
	<link rel="icon" href="images/icon.png">
	<link rel="stylesheet" href="css/style.css">

</head>


<body>
<div class = "header">
	<img src = "images/logo.jpg">
</div>
</body>
<a href="uploadTR.php">Upload Treatment Report</a><br>
<a href="uploadBL.php">Upload Bait Location</a><br>
<a href="uploadRA.php">Upload Risk Assessment</a><br>
<a href="uploadSP.php">Upload Site Plans</a><br><br>

<a href="welcome.php">Return</a><br><br>

</html>
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
<html>
<head>
	<link rel="icon" href="images/icon.png">
	<title>APP Login</title>
	<link rel="stylesheet" href="css/style.css">
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/errorCheck.js" type="text/javascript"></script>
</head>


<body>
<div class = "header">
	<img src = "images/logo.jpg">
</div>

<form id="upload" method="post" action="upload.php" enctype="multipart/form-data">
    
    Select report to upload: <input type="file" name="fileToUpload" id="fileToUpload" accept="application/pdf"><br>
	<?php
		$conn = mysqli_connect("mysql5.gear.host", "app4", "Oo0dn-g0s?Dh", "app4");
		if ($conn->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
		}
		$sql = "SELECT contractNo FROM users";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
    	
		echo '<select name="contractNumber">';

    	while($row = $result->fetch_assoc()) {
    		echo '<option value="'.$row['contractNo'].'">'.$row['contractNo'].'</option>';
    	}
   	}
 	$conn->close();
	?>
	<input type="hidden" name ="fl" value="Bait Locations/">
	<input type="hidden" name ="db" value="bait">
	<input type="hidden" name ="ft" value="bait">
    <input type="submit" value="Upload Report" name="submit">
</form>

</body>
</html>
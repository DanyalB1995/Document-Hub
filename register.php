<?php

session_start();

$conn = mysqli_connect("mysql5.gear.host", "app4", "Oo0dn-g0s?Dh", "app4");

var_dump($_POST);

$user = $_POST["user"];
$contract = $_POST["conNo"];
$password = hash('sha512', $_POST["pass"]);
$account = "customer";

$query = "SELECT * FROM users WHERE username='$user' OR contractNo='$contract'";
$res = mysqli_query($conn,$query);

if($res->num_rows){
	return 0;
}
else{
	$sql = "INSERT INTO users (username, contractNo, password, accountType)
	VALUES ('$user', '$contract', '$password' , '$account')";

	if ($conn->multi_query($sql) === TRUE) {
	    echo "New records created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
}


?>
<?php 

function matchCredentials($username, $password) {
	if ($username === "admin" and $password === "admin") {
		return true;
	}

	return false;
}

function matchCredentialsWithDB($username, $password) {
	$servername = "localhost";
	$dbusername = "root";
	$dbPassword = "";
	$dbname = "tiger";
	$conn = mysqli_connect($servername, $dbusername, $dbPassword, $dbname);
	if (!$conn) {
	  die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT email, password FROM login WHERE email = '$username' and password = '$password'";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) === 1) {
	  return true;
	} else {
	  return false;
	}
}
?>
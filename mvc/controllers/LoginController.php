<?php 

session_start();
require_once '../model/User.php';

$method = $_SERVER['REQUEST_METHOD'];
if ($method === "POST") {
	$username = $_POST['uname'];
	$password = $_POST['password'];
	$_SESSION['usernameErrMsg'] = "";
	$_SESSION['username'] = "";
	$_SESSION['passwordErrMsg'] = "";
	$isValid = true;

	if (empty($username)) {
		$_SESSION['usernameErrMsg'] = "Username is empty";
		$isValid = false;
	}
	else {
		$_SESSION['username'] = $username;
	}
	if (empty($password)) {
		$_SESSION['passwordErrMsg'] = "Password is empty";
		$isValid = false;
	}

	if ($isValid) {
		/*$isMatched = matchCredentials($username, $password);*/
		$isMatched = matchCredentialsWithDB($username, $password);
		if ($isMatched) {
			$_SESSION['isLoggedIn'] = true;
			header("Location: ../views/HomeView.php");
		}
		else {
			$_SESSION['passwordErrMsg'] = "Username or password does not match";
			header("Location: ../views/loginView.php");
		}
	}
	else {
		header("Location: ../views/loginView.php");
	}
} 
else {
	echo "Something went wrong. Please contact the administrator";
}

?>
<?php
	//session = SGB used to store information on a user to be used across multiple pages.
	//a user is assigned a session-id ex. login credentials

	session_start();
?>

<html>
<head>
	<title>login page </title>
</head>
<body>
	<form action="index.php" method="post">
		username:
		<input type="text" name="username"><br><br>
		password:
		<input type="text" name="password"><br><br>
		<input type="submit" name="login" value="login">
	</form>
</body>
</html>

<?php
	if(isset($_POST["login"])){
		if(!empty($_POST["username"]) && !empty($_POST["password"])){
			$_SESSION["username"] = $_POST["username"];
			$_SESSION["password"] = $_POST["password"];

			echo $_SESSION['username'] . "<br><br>" .$_SESSION["password"] ; 

			header("location: home.php");
		}else echo "missing username/password" ;
		
	}
?>
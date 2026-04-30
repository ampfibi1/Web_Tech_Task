<?php
	session_start();
?>

<html>
<head>
	<title>login page </title>
</head>
<body>
	This is the Home page 
	<form action="home.php" method="post">
		<input type="submit" name="logout" value="logout">
	</form>

</body>
</html>

<?php
	if(isset($_POST['logout'])){
		session_unset();
		session_destroy();
		header("location: index.php") ; 
	}
?>
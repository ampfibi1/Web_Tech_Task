<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Practice Final Quiz</title>
	<link rel="stylesheet" href="./Style/style.css">
</head>
<body>
	<form id="login_form" action="../controller/login_validation.php" method="post">
	username:
	<input type="text" name="username" id="username" value="tamjid">
	<span id="errUser" style="color: red;">
		<?php echo isSet($_SESSION["uerrmsg"])?$_SESSION["uerrmsg"]:""; ?>
	</span>
	<br><br>
	
	password:
	<input type='password' name="password" id="password" value="1234">	
	<span id="errPass" style="color: red;">
		<?php echo isSet($_SESSION["perrmsg"])?$_SESSION["perrmsg"]:""; ?>
	</span>

	<br><br>
	<span>
		<?php 
			echo isset($_SESSION["wrongUP"])?$_SESSION["wrongUP"]:"";//found unexpected 1 why this  
			echo "<br><br>"; 
		?>
	</span>

	<input type="submit" name="submit" id="submit">
	</form>

	<script src="./Script/loginValidation.js"></script>
</body>
</html>
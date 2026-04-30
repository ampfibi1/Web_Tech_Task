<html>
<head>
	<title>name</title>
	<style>
		.userInfo{
			margin:0 auto;
			width:400px;
		}
		.error{
			color:red;
		}
	</style>
</head>
<body>
	<fieldset class="userInfo">
		<legend> user information </legend>

		<form id="loginForm" method="post" action="two.php">
			<label for="name">username</label>
			<input type="text" id="name" name="name" >
			<span id="unameError" class="error"></span>
			<br><br>

			<label for="password">password</label>
			<input type="password" id="pass" name="password">
			<span id="upassError" class="error"></span>
			<br><br>

			<input type="submit">
		</form>
	</fieldset>

	<script src="jsValidation.js"></script>
</body>
</html>
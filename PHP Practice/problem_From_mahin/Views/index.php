<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Library management system</title>
</head>
<body>
	<form id="form" action="../Controller/formvalidation.php" method="POST">
		Book title: <input type="text" id="title" name="title">
		Author name: <input type="text" id="author" name="author">
		Catagory:
		<select name="catagory">
			<option value="horror">Horror</option>
			<option value="thriller">Thriller</option>
			<option value="fiction">Fiction</option>
		</select>
		Status: 
		<select name="status">
			<option value="available">Available</option>
			<option value="notavailable">not-Available</option>
		</select>

		<br><br><br>
		<button type="submit" name="action" id="insert" value="insert">Insert</button>
		<button type="submit" name="action" id="update" value="update">Update</button>
		<button type="submit" name="action" id="delete" value="delete">Delete</button>
		<br><br><br>

		<span id="msg"><?php echo isset($_SESSION['msg'])?$_SESSION['msg']:""; ?></span>
		<span id="table"></span>
	</form>
	<script src="./Script/formvalidation.js"></script>
</body>
</html>
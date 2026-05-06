<?php
	echo "Home Header<br><br>" ; 
?>
<!DOCTYPE html>
<html>
<head>
	<title>File Submission</title>
	<link rel="stylesheet" href="./Style/homeStyle.css">
</head>
<body>
	<form action="../controller/file_validation.php" method="POST" id="file_submission" enctype="multipart/form-data">
		image: 
		<input type="file" id="imgUpload" name="imgUpload">
		<br><br>

		<span id="errmsg">

		</span>

		
		<input type="submit" id="submit" name="submit">
	</form>
	<script src="./Script/fileValidation.js"></script>
</body>
</html>

<?php
	echo "Home footer" ; 
?>
<?php
	function conn_open(){
		$conn = mysqli_connect("localhost","root","","mycourse");

		if(!$conn) die("error".mysqli_connect_error());
		return $conn;
	}
?>
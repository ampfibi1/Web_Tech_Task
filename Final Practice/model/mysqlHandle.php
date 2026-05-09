<?php

function conn_open(){
	$conn = mysqli_connect("localhost","root","","course_info");
	if(!$conn) die("conn err".mysqli_connect_error());
	return $conn;
}

function conn_close($conn){
	mysqli_close($conn);
}

function insert_item($name, $status, $price, $conn){
	$sql = "INSERT INTO info (name,status,price)  VALUES ('$name', '$status', '$price') ";
	return mysqli_query($conn,$sql);
}

function data_load($conn){
	$sql = "SELECT name,status,price FROM info";
	$res = mysqli_query($conn,$sql);

	$courses = array();

	while($row = mysqli_fetch_assoc($res)){
		$course = array('name'=>$row['name'], 'status'=>$row['status'], 'price'=>$row['price']); 
		array_push($courses,$course);
	}
	return $courses;
}

?>
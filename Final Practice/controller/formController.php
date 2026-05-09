<?php

session_start();

require_once '../model/mysqlHandle.php' ;
require_once 'reloadData.php';

if($_SERVER['REQUEST_METHOD']){
	$name = $_POST['name'];
	$status = $_POST['status'];
	$price = $_POST['price'];

	$action =$_POST['action'];

	$f=true;
	if(empty($name) || empty($price)){
		$f=false;
	}else{
		if($action === "insert"){
			$conn = conn_open();
			insert_item($name, $status, $price, $conn);
			conn_close($conn);
		}
		if($action === "delete"){

		}
	}
	header("Location: ../views/index.php");
	exit();
}
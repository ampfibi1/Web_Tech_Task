<?php
require_once '../model/mysqlHandle.php' ;
session_start();
dataLoad();
function dataLoad(){
	$conn = conn_open();
	$courses = data_load($conn);
	conn_close($conn);
	$_SESSION['courses'] = $courses ; 
}
?>
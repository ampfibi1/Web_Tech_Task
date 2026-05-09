<?php
	
require_once '../Model/course_manupulation.php';
require_once '../Model/DB_Connection.php';
require_once '../Model/DB_Close.php';

$conn = conn_open();
$courses = courseLoad($conn);
conn_close($conn);

echo json_encode($courses);
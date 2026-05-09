<?php

function insert_on_DB($title,$author ,$catagory ,$status,$conn){
	$sql = "INSERT INTO courses (title,author,catagory,status) VALUES ('$title','$author' ,'$catagory' ,'$status')" ; 
	return mysqli_query($conn,$sql);
}

function courseLoad($conn){
	$sql = "SELECT * FROM courses";
	$result = mysqli_query($conn,$sql) ;
	$courses = array();

	while($row = mysqli_fetch_assoc($result)){
		$course = array(
					"id"=>$row['id'], "title"=>$row['title'], "author"=>$row['author'],
					"catagory"=>$row['catagory'], "status"=>$row['status'] 
				);
		array_push($courses,$course);
	}
	return $courses;
}
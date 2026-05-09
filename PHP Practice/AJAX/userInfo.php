<?php

	$conn = mysqli_connect("localhost","root","","myapp");

	if(!$conn) {
		die("connection Error".mysqli_connect_error());
	}


	$query = "SELECT * FROM user_info" ; 
	$result = mysqli_query($conn,$query);
	$data = array() ;

	while($row=mysqli_fetch_assoc($result)){
		$data[] = array('id'=>$row['id'] , 'name'=>$row['name'],
							'email'=>$row['email'] , 'password'=>$row['password']);
	}

	echo json_encode($data);
?>
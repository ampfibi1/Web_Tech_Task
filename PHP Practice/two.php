<?php
	$userInfo = array("tamjid",1234);

	if($_POST['name']==$userInfo[0]  && $_POST['password']==$userInfo[1])
		echo "Log in successfull" ; 
	else echo "Log in Not successfull" ; 
?>
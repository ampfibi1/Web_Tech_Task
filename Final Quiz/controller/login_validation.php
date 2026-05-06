<?php
	session_start();
	//echo "HIIIIIIIIIIIIIIIIIIIII" ; 
	require_once("../model/loginDB.php");

	$isPost = $_SERVER['REQUEST_METHOD'];
	//var_dump($isPost) ; 

	if($isPost === "POST"){
		$uname = $_POST["username"] ; 
		$pass = $_POST["password"] ;

		$_SESSION["uerrmsg"] = "";
		$_SESSION["perrmsg"] = "";
		$_SESSION["wrongUP"] = "";

		$flag = true ; 
		if(empty($uname)){
			$_SESSION["uerrmsg"] = "Fill username" ;
			$flag = false ; 
		} else{
			$_SESSION["username"] = $uname ; 
		}

		if(empty($pass)){
			$_SESSION["perrmsg"] = "Fill pass" ;
			$flag = false ; 
		} else{
			$_SESSION["password"] = $pass;
		}
		

		if($flag) {
			//goto model check in db
			//echo "till now ok " ;  
			if(isInfo_in_DB($uname,$pass)){
				$_SESSION["loginStatus"] = true ; 
				header("Location: ../views/home.php");
			}else{
				$_SESSION["wrongUP"] = "Username & pass not found in DB"  ; 
				header("Location: ../views/index.php");
			}
		}
		else{
			header("Location: ../views/index.php");
		}
	}
	
?>
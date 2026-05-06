<?php
	function isInfo_in_DB($name,$pass){
		$flag = false ; 
		if($name === "tamjid" and $pass === "1234"){
			$flag = true ;
		}
		return $flag ;
	}
?>
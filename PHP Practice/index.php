<?php
	$x = 10 ; 
	echo "hello world $x" ;

	clickMe();
	
	function clickMe(){
		$x = 400 ; 
		echo "$x this is my world type<br><br>"; 
	}

	function isSetCheck(){
		$a=1 ; $b=0; $c=true; $d=false; $e; $f=null;


		$arr = array(isset($a), isset($b), isset($c), isset($d), isset($e), isset($f));

		echo "isset value :"; 
		for($i=0; $i<count($arr); $i++){
			if(!$arr[$i]) echo "false, ";
			else echo "True, ";
		}
	}
	isSetCheck();

	echo "<br><br>" ; 

	function _empty(){
		$a=1 ; $b=0; $c=true; $d=false; $e; $f=null;


		$arr = array(empty($a), empty($b), empty($c), empty($d), empty($e), empty($f));

		echo "empty value :"; 
		for($i=0; $i<count($arr); $i++){
			if(!$arr[$i]) echo "false, ";
			else echo "True, ";
		}
	}
	_empty();
	$y = 'xyz' ; 
	$x = [10,20,30,"tamjid",$y,true,false] ; 

	foreach ($x as $value){
		echo "$value". "<br>" ; 
	}

	//associative array
	#also comment
	$a = ["age"=>10 , "cgpa" => 3.14] ; 

	echo "age = {$a["age"]}, cgpa = {$a["cgpa"]}" ; 

	echo "{$_POST["name"]}" ; 
?>

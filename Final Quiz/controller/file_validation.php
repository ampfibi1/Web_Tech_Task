<?php
	session_start();

	echo "Action work<br><br>"; 

	var_dump($_FILES["imgUpload"]);

	echo "<br><br>"; 

	//move_uploaded_file(string $from, string $to): bool
	// from
	// The filename of the uploaded file.
	
	// to
	// The destination of the moved file.

	

	{
		echo $_FILES["imgUpload"]["size"] . "<br><br>";
		echo $_FILES["imgUpload"]['type'] . "<br><br>"; 

		$_SESSION["errmsg"] = "" ; 

		//if($_FILES["imgUpload"]["type"]==="image/p"){
		//strpos(main_string, search_text)
		//return the index number where found the string on main_string 
		if(strpos($_FILES["imgUpload"]["type"],"image/")===0){
			move_uploaded_file($_FILES['imgUpload']['tmp_name'], '../views/Photos/'.$_FILES['imgUpload']['name']); 
			echo "Yes this is a image"; 
			header("Location: ../views/gallery.php");
			$_SESSION["errmsg"] = "Okay" ; 
		} 
		else {
			echo "send image" ; 		
			$_SESSION["errmsg"] = "this is not an image" ; 
			header("Location: ../views/home.php");
		}

	}
?>
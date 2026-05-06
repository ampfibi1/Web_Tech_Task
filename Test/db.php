<?php
    echo "this file is run " . "<br><br>" ; 
    $conn = new mysqli("localhost", "root", "", "tt");

    if(!$conn){
        echo "connection fail" ; 
        die(mysqli_connect_error());
    }
    else {
        echo "Succssfull connect" . "<br><br>"; 
        $sql = "insert into tt (uname,pass) values('hi','1234')"
        $res = mysqli_query($conn,$sql);

        if($res){
            echo "upload successfully!" ; 
        }

        //if (mysqli_num_row($res) > 0)
        //echo "your have some data " ;
        //echo "0records"
        
    }
?>
<?php
    var_dump($_FILES);
    echo "<br><br>" ; 
    var_dump($_FILES['fileToUpload']);

    echo "<br><br>" . "check is file is uploaded". "<br><br>";
    
    if(isset($_FILES['fileToUpload'])){
        echo "file is uploaded" ;
    }else echo "file is not uploaded" ;

    echo "<br><br>" . "valid file size". "<br><br>";
    if ($_FILES['fileToUpload']['size'] > 2000000) { // 2MB limit
        echo "File too large!";
    }

    echo "<br><br>" . "valid file". "<br><br>";
    //i can also use $allowtype = ['image/i'] --> that's mean all types of file is allow to upload 
    $allowedTypes = ['image/jpeg', 'image/png', 'application/pdf'];
    if (!in_array($_FILES['fileToUpload']['type'], $allowedTypes)) {
        echo "Invalid file type";
    }else echo "valid file type" ; 

    $fileName = basename($_FILES['fileToUpload']['name']);
    $targetFile = "uploads/" . uniqid() . "_" . $fileName;

    if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $targetFile)) {
        echo "Upload successful!";
        echo '<img src="' . $targetFile . '" alt="Uploaded Image" style="max-width:300px;">';
    } else {
        echo "Upload failed!";
    }





?>
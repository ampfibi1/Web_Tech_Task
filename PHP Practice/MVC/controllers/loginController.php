<?php
    session_start();
    require_once '../Model/userModel.php';

    $method = $_SERVER["REQUEST_METHOD"];
    if($method === "POST"){
        $uname = $_POST["username"];
        $pass = $_POST["password"];

        $_SESSION['username_error'] = "";
	    $_SESSION['username'] = "";
	    $_SESSION['password_error'] = "";

        $isValid = true ;

        if(empty($uname)){
            $isValid = false;
            $_SESSION["username_error"] = "Username is required";
        }
        else{
            $_SESSION["username"] = $uname;
        }
        if(empty($pass)){
            $isValid = false;
            $_SESSION["password_error"] = "Password is required";
        }
        if($isValid){
            $authanticated = validateLogin($uname, $pass);
            if($authanticated){
                $_SESSION["isLoggedIn"] = true;
                header("Location: ../Views/home.php");
            }
            else{
                $_SESSION["password_error"] = "Invalid username or password";
                header("Location: ../Views/login.php");
            }
        }
        else{
            header("Location: ../Views/login.php");
        }
    }
    else{
        echo "Contact with admin";
    }
?>
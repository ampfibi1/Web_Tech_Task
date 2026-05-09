<?php
session_start();

require_once '../Model/course_manupulation.php';
require_once '../Model/DB_Connection.php';
require_once '../Model/DB_Close.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $title = $_POST['title'] ?? '';
    $author = $_POST['author'] ?? '';
    $catagory = $_POST['catagory'] ?? '';
    $status = $_POST['status'] ?? '';

    $action = $_POST['action'] ?? '';

    $_SESSION['msg'] = "";

    if (empty($title) || empty($author)) {
        $_SESSION['msg'] = "Title and Author are required";
    } else {
        if ($action === "insert") {
        	$conn = conn_open();
        	insert_on_DB($title,$author ,$catagory ,$status,$conn);
        	conn_close($conn);
            $_SESSION['msg'] = "Insert Successful";
        } 
        elseif ($action === "update") {
            $_SESSION['msg'] = "Update Successful";
        } 
        elseif ($action === "delete") {
            $_SESSION['msg'] = "Delete Successful";
        }
    }

    header("Location: ../Views/index.php");
    exit;
}
?>
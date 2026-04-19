<?php
$conn = new mysqli("localhost", "root", "", "myapp");

if ($conn->connect_error) {
    die("Connection failed");
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();

    if ($password == $user['password']) {
        echo "Login successful";
    } else {
        echo "Wrong password";
    }
} else {
    echo "User not found";
}
?>
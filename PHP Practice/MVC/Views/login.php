//learning
//$SERVER[REQUEST_METHOD] → how request was sent

<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <?php require 'header.php'; ?>
    <br><br>
    <form action="../Controllers/loginController.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" value="<?php echo isset($_POST["username"])?$_SESSION["username"]:""; ?>">
        <span>
            <?php echo isset($_SESSION["username_error"])?$_SESSION["username_error"]:""; ?>
        </span>

        <br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"value="<?php echo isset($_POST["password"])?$_SESSION["password"]:""; ?>">
        <span>
            <?php echo isset($_SESSION["password_error"])?$_SESSION["password_error"]:""; ?>
        </span>

        <br><br>
        <input type="submit" value="Login">
    </form>
    <?php require 'fotter.php'; ?>
</body>
</html>
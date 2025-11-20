<?php
session_start();
include "connect.php";

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $psw = $_POST['psw'];

    $select = "SELECT * FROM user WHERE username='$username' AND psw='$psw'";
    $select_send = $con->query($select);

    if(mysqli_num_rows($select_send) > 0){
        $_SESSION['user'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Invalid user";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post">
    <h3>Login</h3>
    <input type="text" placeholder="username" name="username"> <br><br>
    <input type="password" placeholder="password" name="psw"> <br><br>

    <button type="submit" name="submit">Login</button>
    <a href="register.php">Register</a>
</form>

</body>
</html>

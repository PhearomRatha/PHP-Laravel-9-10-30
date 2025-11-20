<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post">
    <h3>Register</h3>
    <input type="text" placeholder="username" name="username"> <br><br>
    <input type="text" placeholder="password" name="psw"> <br><br>

    <button type="submit" name="submit">Register</button>
    <a href="login.php">login</a>
</form>
    
</body>
</html>

<?php
include "connect.php";

if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $psw=$_POST['psw'];
    $insert="INSERT INTO user (username,psw)VALUES('$username','$psw')";
    $insert_send=$con->query($insert);
    if($insert_send){
        header("location:login.php");
    }
}




?>
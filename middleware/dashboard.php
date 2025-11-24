<!-- dashboard.php -->


<?php
require("auth.php");
checkLogin();


if($_SESSION['users']['role'] != "admin"){
    header("location:login.php");
}

?>


<h1>Welcome to dashbord  manus Smos</h1>
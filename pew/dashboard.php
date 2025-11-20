<?php
session_start();
require "middleware.php";
checkLogin();


?>
<h1>Welcome</h1>
<a href="logout.php">logout</a>
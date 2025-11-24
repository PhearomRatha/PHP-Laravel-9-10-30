<?php
$server ="localhost";
$username="root";
$psw="";
$db="middlewear";
$con=mysqli_connect($server,$username,$psw,$db);
if(!$con){
    echo "connect fail";
}




?>
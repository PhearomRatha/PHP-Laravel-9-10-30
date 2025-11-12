<?php
$server = "localhost";
$username="root";
$psw="";
$db="php-9-10";

$con=mysqli_connect($server,$username,$psw,$db);
if(!$con){
    echo "connct fail";
}



?>
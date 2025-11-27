<?php
include "connect.php";
$name = $_POST['pro_name'];
$qty = $_POST['pro_qty'];
$price= $_POST['pro_price'];

$insert =  "INSERT INTO  products (pro_name,pro_price,pro_qty) 
           values ('$name','$price','$qty')";
$insert_send=$conn->query($insert);
if($insert_send){
    echo "insert success";
}





?>
<?php
include "connect.php";
$id = $_POST['key'];
$delete = "DELETE  FROM products where id = $id";
if($conn->query($delete)){
    echo "remove successfuully";
}else{
    echo "fail remove";
}



?>
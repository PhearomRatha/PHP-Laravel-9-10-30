<?php

include "connect.php";

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $remove = "DELETE FROM user where id = $id";
    $remove_send=$conn->query($remove);
    if($remove_send){
        header("Location:index.php");
    }
}




?>
<?php

include "connect.php";
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $remove="DELETE FROM product where code = $id";
    $remove_send=$con->query($remove);
    if($remove_send){
        echo "<script>alert('remove succesfully')</script>";
        header("location:table.php");
    }

}


?>
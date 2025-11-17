<?php

include "connect.php";
//7
if(isset($_GET['code'])){
    //7
    $id=$_GET['code'];                         //7
    $remove="DELETE FROM product where code = $id";
    $remove_send=$con->query($remove);
    if($remove_send){
        echo "<script>alert('remove succesfully')</script>";
        header("location:table.php");
    }

}


?>
<?php

include "connect.php";

$id=$_POST['id'];
$name=$_POST['pro_name'];
$qty=$_POST['pro_qty'];
$price=$_POST['pro_price'];

$update= "UPDATE products set pro_name='$name', 
          pro_price=$price,pro_qty=$qty where id = $id";
if($conn->query($update)){
    echo "update success";

}else{
    echo "update ដែលតែអត់success";
}




?>
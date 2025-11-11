<?php
include "Connection.php";

// insert into db

$insert = "INSERT INTO product (pro_name,pro_price,pro_qty)
           VALUES('coca',4.5,5)";
$insert_send=$con->query($insert);
if($insert_send){
    echo "product Add successfully";
}else{
    echo "product add fail";
}



?>
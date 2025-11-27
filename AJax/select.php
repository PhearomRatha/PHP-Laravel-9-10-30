<?php
include "connect.php";
$select =  "SELECT * FROM products";
$select_send= $conn->query($select);
if($select_send){
    while($row=mysqli_fetch_assoc($select_send)){
        $data[] = $row;
    }
    echo json_encode($data);

}






?>
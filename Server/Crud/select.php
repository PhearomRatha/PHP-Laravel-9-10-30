<?php
include "Connection.php";
$select= "SELECT * FROM product";
$select_send=$con->query($select);
while($row= mysqli_fetch_assoc($select_send)){
    echo "<tr>
            <td>$row[code]</td>
            <td>$row[pro_name]</td>
            <td>$row[pro_price]</td>
            <td>$row[pro_qty]</td>
            <td><a class='btn btn-danger'>Remove</a> </td>
            <td><a class='btn btn-primary'>Update</a> </td>  
        </tr>"; 
}



?>
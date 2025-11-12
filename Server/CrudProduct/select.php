<?php

include "connect.php";
$select= "SELECT * FROM product";
$result=$con->query($select);
while($row=mysqli_fetch_assoc($result)){
    echo "
          <tr>
                <td>$row[code]</td>
                <td>$row[pro_name]</td>
                <td>$row[pro_qty]</td>
                <td>$row[pro_price]$</td>
                <td> <a href='remove.php?id=$row[code]' class='btn btn-danger' > remove</a> </td>
                 <td> <a href='' class='btn btn-primary'> update</a> </td>
            </tr>
    
    
    ";

}





?>
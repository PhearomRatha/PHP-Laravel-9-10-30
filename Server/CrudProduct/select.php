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
                <td> <a href='remove.php?id=$row[code]' 
                      class='btn btn-danger'
                        onclick=\"return confirm('Are you sure you want to remove this item')\"
                        >remove</a>
                 </td>
                 <td> <a href='update.php?id=$row[code]' class='btn btn-primary'> update</a> </td>
            </tr>
    
    
    ";

}





?>
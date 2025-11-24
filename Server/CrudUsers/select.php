<?php
include "connect.php";

$username = "'; DROP TABLE products; -- ";
$select = "SELECT * FROM products WHERE id = '$username'";
echo "<pre>$select</pre>";

$result = $conn->multi_query($select);  
if ($result) {
    echo mysqli_fetch_assoc($result);
} else {
    echo "Error: " . $conn->error;
}


// while($row=mysqli_fetch_assoc($select_send)){
//     echo "
//       <tr>
//                 <td>$row[id]</td>
//                 <td>$row[username]</td>
//                 <td>$row[email]</td>
//                 <td>
//                 <img src='./uploads/{$row['image']}'  alt='$row[username]' style='width:50px;height:50px'>
//                  </td>
//                  <td> <a href='remove.php?id=$row[id]'
//                        onclick=\" return confirm ('Are you sure to remove me ?💔') \"
//                        class='btn btn-danger'> remove</a> 
//                   </td>
//                  <td> <a href='' class='btn btn-primary'> update</a> </td>
//             </tr>
    
//     ";
// }



?>
<?php
$numbers = [
    [10,20,30],
    [200,400,300],
    [100,500,70]
];
// echo $numbers[0][2];//30
// echo $numbers[2][2];//70 70 70

echo "<table border='1'>";
foreach($numbers as $row){
    echo "<tr>";
    foreach($row as $value){
       echo "<td>$value</td>";
    }
      echo "</tr>";
}
echo "</table>";





?>
<?php
//  array
$arr=['sophea', 'thida'];

foreach($arr as $index => $value){
    echo "index:" .$index. " and value". $value;
}

$img = ["naja.jpg", "naja1.jpg"];
foreach ($img as $value) {
    echo "<img src='../image/$value' style='width:200px;height:200px;float:left;'>";
}

// count($arr) → Number of elements

// array_push($arr, $value) → Add value at the end

// array_pop($arr) → Remove last element

// array_shift($arr) → Remove first element

// array_unshift($arr, $value) → Add value at the beginning



$color = ['red','green'];
echo "<br>". count($color);
echo "<br>" . array_push($color,"tin");
echo "<br>" . array_pop($color);
echo "<br>" .  array_shift($color);
echo "<br>" . array_unshift($color,"tuy");

//muti
$students = [
    ["name" => "Sophea", "age" => 20],
    ["name" => "Thida", "age" => 22]
];
echo $students[1]["name"]; // Thida
//associate array
$person = ["name" => "Sophea", "age" => 20];
echo $person["name"]; // Sophea


?>
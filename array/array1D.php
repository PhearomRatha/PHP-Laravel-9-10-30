<?php

$colors = ['red','blue',"green"];
echo $colors[0] ."<br>";
echo $colors[1] ."<br>";
echo $colors[2] ."<br>";




foreach($colors as $index =>$value){
    echo $index .":". $value ."<br>";
}

foreach($colors as $value){
        echo  $value ."<br>";

}

$image = ["cuteboy.jpg","cutegirl.jpg","jihoong.jpg","naja.jpg","thearith.jpg"];

foreach($image as $value){
    echo "<img style='width:300px;'
    src='../Images/$value'>";
}


$numbers = [10,20,30,40,50];
// array_pop ro remove last element
 array_pop($numbers);
 // add new value at last element of array
 array_push($numbers,100);
 //remove first element of array
 array_shift($numbers);
//add elment if fron
 array_unshift($numbers,200);
foreach($numbers as $value){
    echo $value ."<br>";//10 20 30 40 50
}














?>
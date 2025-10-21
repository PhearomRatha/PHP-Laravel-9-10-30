<?php

$num = [100,30,50,70,88,99];
//array_pop($num);//100, 30 ,50  // remove last element of array
//array_push($num,88);// 100 30 50 70 88   add last element of array
//array_shift($num);//30 50 70 remove first element of array
//array_unshift($num,99);//99 100 30 50 70  add first element of array
//$num2=[100,400];
//$result =array_merge($num,$num2);//100,30,50,70,100,400
//sort($num);//30 50 70 100

  $result2= array_slice($num,2,2);   //50 70                              
foreach($result2 as $value){
    echo $value ."<br>";

}

$person=[
    "name"=>"dara",
    "age"=>19,
    "major"=>"Ice tea"
];
 ksort($person);
foreach($person as $key =>$value){
    echo $key .":". $value ."<br>"; 
}





?>
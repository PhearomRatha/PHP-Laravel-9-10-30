<?php
// non return function

// non return function no parameter
function Greeting(){
    echo " Hello ";
}

echo Greeting() . "Dara <br>";
echo Greeting() . "Visal <br>";
echo Greeting() . "Thearith <br>";


// non return function with paramter;

//$a $b parameter
function sum($a,$b){
    echo $a + $b;

}
// 100 ,200 argument
echo sum(100,200) ."<br>";

echo sum(300,500) ."<br>";


// + return function
// - return function have no parameter
function sum1(){
    $a=100;
    $b=200;
    return $a+$b;
}

echo sum1() + 400 ."<br>";//700 


// return function have parameter

function sum2($num1,$num2){
   return $num1 - $num2;
}

echo sum2(100,200) - 300;












?>
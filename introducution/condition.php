<?php

$num1= 100;

//if 
if($num1 == "100"){
    echo "Num 1 is equal 100<br>";
}

if($num1 === "100"){
    echo "Num 1 is equal 100<br>";
}

//if else 
if($num1 >=10){
    echo "u are in our group<br>";
}else{
    echo "u are not in our group<br>";
}

//if else if
if($num1 <= 10){
    echo "you are too young";
}elseif($num1>10 && $num1<20){
    echo "you can drink milk";
}else{
    echo "you can drink beer <br>";
}



//nested condition
$code =101;
$name = "dara";
$psw = "123";

if($code == 101){//true
    if($name == "dara"){//true
            if($psw==123){//true
                echo "login";
            }else{
                echo "invalid psw";
            }  
    }else{
        echo "invalid name";
    }
}else{
    echo "your code is invalid";
}


?>
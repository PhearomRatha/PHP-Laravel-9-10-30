<?Php

$n=5;
// for loop
     //i=1 1>=5  false 
for($i=1;$i>=$n;$i++){
    echo " value of number is: $i <br>"; 

}

// do while 
// start
$i=1;
 do{
    echo "I miss you Dara<br> ";
    //step
    $i++;
    //i=1+1=2

 }while($i>$n);//false  2>5



 //while

 //start 
 $i=10;
 //stop condition
 // 10<= 5 flase 
 while($i<=$n){
    echo "សួស្តីមនុស្សស្មោះ";
    // step
    $i+=2;

 }

 //for each
 $colors = ["red","green","yellow","blue","black"];
 foreach($colors as $value){
    echo "Your color is $value <br>";
 }

 // for each index value
 foreach($colors as $index =>$value){
   echo "$index :  $value <br>";

 }





?>
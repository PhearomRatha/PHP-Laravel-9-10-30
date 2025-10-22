<?php
// associate array
// $person = [
//     //key
//     "name" => "Dara",
//     "age" => 18,
//     "address" => "phnom penh"

// ];
// foreach ($person as $key => $item) {
//     echo $key . ":" . $item . "<br>";
// }

// associate array with 2D;
// echo "<hr>";

// $students = [
//     ["name" => "Hong", "age" => 15, "major" => "ITE"],
//     ["name" => "Thearith", "age" => 85, "major" => "ICE Tea"],
//     ["name" => "visal", "age" => 20, "major" => "laugh"]
// ];

//echo $students[0]["name"];


// foreach ($students as $index => $student) {
//     echo "student:" . $index + 1 . "<br>";
//     foreach ($student as $value => $item) {
//         echo $value . ":" . $item;
//         echo "<br>";
//     }

//     echo "<br>";
// }


//  nested associate 2D array 
$students = [
    ["name" => "Hong",
     "age" => 15,
     "major" => "ITE", 
     "subject" => ["math", "C++", "Ice tea"]]
      ,
    ["name" => "Thearith",
     "age" => 85, 
     "major" => "ICE Tea",
     "subject" => ["c", "C#", "java"]],
    ["name" => "visal",
     "age" => 20,
     "major" => "laugh",
     "subject" => ["db", "python", "PHP"]]
];

foreach($students as $row => $value){
    echo "Student :". $row+1 ."<br>";
    foreach($value as $key=>$val){
        if(is_array($val)){
            echo $key .":";
            foreach($val as $col){
                echo $col . ",";
            }
        }else{
                echo $key .":". $val ."<br>"; 
        }
    }
    echo "<br>";
    echo "<hr>";
}








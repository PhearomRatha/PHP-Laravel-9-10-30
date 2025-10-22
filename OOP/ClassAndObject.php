<?php

// declear name of class
class Fruit{
    // Propoties,data memeber
    public $name = "Orange";
    public $color = "red";

    // method ,function
    function diplay(){
        echo $this->name . ":". $this->color;
    }

}

// Object

$fruit = new Fruit();
// call function ->
$fruit->diplay();
echo $fruit->name;




?>
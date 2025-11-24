<!-- auth.php -->


<?php
function checkLogin(){
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }

    if(!isset($_SESSION['users'])){
        header("location:welcome.php");
        exit();
    }

    
}



?>
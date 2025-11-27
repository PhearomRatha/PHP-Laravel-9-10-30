<!-- register.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <form class="w-25 m-auto shadow-lg p-3 " method="post">
        <h2 class="text-center">Register</h2>
        <input type="text" placeholder="username" name="username" class="form-control"> <br> 
        <input type="text" placeholder="email" name="email"  class="form-control"> <br> 
        <input type="text" placeholder="psw" name="psw" class="form-control"> <br> 
       <div class="mb-3 d-flex justify-content-center align-items-center flex-column">
         <button type="submit" name="submit" class="btn btn-success">Register</button> <br>
        <a href="login">Already have account</a> 
       </div>
    </form>
    
</body>
</html>

<?php
include "connect.php";

if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $psw=password_hash($_POST['psw'],PASSWORD_DEFAULT);
    $role="user";

    $insert = "INSERT INTO users (username,email,psw,role) 
                VALUES('$username','$email','$psw','$role')";
    $insert_send=$con->query($insert);

    if($insert_send){
        header("location:login.php");
    }else{
        echo "something wrong";
    }
    
    
}




?>
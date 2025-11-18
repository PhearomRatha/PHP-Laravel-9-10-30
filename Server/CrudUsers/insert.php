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

<form  class="w-25 m-auto p-3 shadow-lg " method="post" enctype="multipart/form-data">
    <h4 class="text-center">user Information</h4>
    <div class="mb-2">
        <label for="" class="form-label">username</label>
        <input type="text" class=" form-control " name="username" placeholder="username">
    </div>
        <div class="mb-2">
        <label for="" class="form-label">Email</label>
        <input type="text" class=" form-control " name="email" placeholder="email">
    </div>
          <div class="mb-2">
        <label for="" class="form-label">Img</label>
        <input type="file" class=" form-control " name="img" >
    </div>
    <div class="mb-3">
        <button type="submit" name="submit" class="btn btn-primary w-100" >Add</button>
    </div>
    
</form>
    
</body>
</html>

<?php

include "connect.php";
if(isset($_POST['submit'])){
    $username =$_POST['username'];
    $email= $_POST['email'];
    $img= $_FILES['img']['name'];
    $tmp=$_FILES['img']['tmp_name'];
    $path="./uploads/" .$img;
    if(move_uploaded_file($tmp,$path)){
        $insert = "INSERT INTO user (username,email,image)VALUES('$username','$email','$img')";
        $insert_send=$conn->query($insert);
        if($insert_send){
            echo "insert success";
            header("Location:index.php");

        }else{
            echo "insert fail";
        }
    }else{
        echo "can not upload files";
    }

}





?>
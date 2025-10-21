<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>

<body class=" justify-content-center align-items-center d-flex flex-column">
    <form class="w-25 shadow-lg rounded-2 p-3 mt-5"  method="GET">
        <h3 class="text-center">Form</h3>
        <div class="mb-3">
            <label class=" form-label" for="">Username</label>
            <input class=" form-control" type="text" placeholder="usesrname" name="name">
        </div>
             <div class="mb-3">
            <label class=" form-label" for="">Email</label>
            <input class=" form-control" type="text" placeholder="Email" name="email">
        </div>
         <div class="mb-3 justify-content-center d-flex align-items-center">
            <button class="btn btn-primary" type="submit" name="add">Submit</button>
         </div>
    </form>
    <?php

if(isset($_GET['add'])){
    //varible         //get from name input 
    $username = $_GET['name'];
    
    $email = $_GET['email'];
    echo " <h1>Your username is $username </h1>";
    echo " <h1>your emilais $email</h1>";

}
  


?>
    

</body>

</html>
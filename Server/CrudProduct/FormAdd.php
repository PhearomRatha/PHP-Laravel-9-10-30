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
    <form action="" class="w-25 shadow-lg p-3 mt-5 m-auto" method="post">
        <h4 class="text-center text-warning">Input Product</h4>
        <div class="mb-3">
            <label for="" class="form-label">Product Name</label>
            <input type="text" class="form-control" name="name">
        </div>
                <div class="mb-3">
            <label for="" class="form-label">Product Qty</label>
            <input type="number" class="form-control" name="qty">
        </div>
         <div class="mb-3">
            <label for="" class="form-label">Product Price</label>
            <input type="text" class="form-control" name="price">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-success w-100" name="submit">Add Product</button>
        </div>
    </form>


    
</body>
</html>


<?php
include "connect.php";

if(isset($_POST['submit'])){
    $name = $_POST["name"];
    $qty=$_POST["qty"];
    $price=$_POST["price"];

    $insert = "insert into product (pro_name,pro_price,pro_qty)
               values('$name',$price,$qty)";
    $insert_send=$con->query($insert);
    if($insert_send){
        echo "<script>alert('insert succefully')</script>";
        // redirect to table page
        header("Location:index.php");
    }
    

}



?>
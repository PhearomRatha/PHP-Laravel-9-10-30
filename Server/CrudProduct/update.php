<?php
// use for select
include "connect.php";
if(isset($_GET['id'])){
    $id =$_GET['id'];
   $select="SELECT * FROM product where code = $id";
   $select_send=$con->query($select);
   $row=mysqli_fetch_assoc($select_send);
   $code = $row['code'];
   $name = $row['pro_name'];
   $qty = $row['pro_qty'];
   $price=$row['pro_price']; 

  
}

?>
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
        <h4 class="text-center text-warning">Update Product</h4>
            <div class="mb-2">
            <label for="" class="form-label">Product Code</label>
            <input type="text" disabled class="form-control" name="code" value="<?=   $code; ?>">
        </div>
        <div class="mb-2">
            <label for="" class="form-label">Product Name</label>
            <input type="text" class="form-control" name="name" value="<?=   $name; ?>">
        </div>
                <div class="mb-2">
            <label for="" class="form-label">Product Qty</label>
            <input type="number" class="form-control" name="qty" value="<?= $qty ?>">
        </div>
         <div class="mb-2">
            <label for="" class="form-label">Product Price</label>
            <input type="text" class="form-control" name="price" value="<?= $price ?>">
        </div>
        <div class="mb-2">
            <button type="submit" class="btn btn-success w-100" name="update">Edit</button>
        </div>
    </form>


    
</body>
</html>


<?php
// update 

if(isset($_POST['update'])){
    $code =$_POST['code'];
    $name=$_POST['name'];
    $price=$_POST['price'];
    $qty=$_POST['qty'];

    $update =  "UPDATE product SET
               pro_name = '$name',
                pro_price= $price,
                pro_qty=$qty 
                WHERE code = $id ";
    $update_send=$con->query($update);
    if($update){
        echo "update successfully";
        // redirect to table
        header("Location:table.php");
    }


}



?>


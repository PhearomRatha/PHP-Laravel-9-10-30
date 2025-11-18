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
    <a href="./CrudProduct/FormAdd.php" class="btn btn-primary">Add Product</a>
    <table class="table text-center w-75 m-auto" >
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Qty</th>
                <th>Price</th>
                <th colspan="2">Action❤️</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>001</td>
                <td>mai</td>
                <td>10</td>
                <td>2.4$</td>
                <td> <a href="" class="btn btn-danger"> remove</a> </td>
                 <td> <a href="" class="btn btn-primary"> update</a> </td>
            </tr>
            <?php 
             include "./CrudProduct/select.php";
            ?>
        </tbody>

    </table>

    
</body>
</html>
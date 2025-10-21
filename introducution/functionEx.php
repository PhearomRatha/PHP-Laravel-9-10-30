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
    <form class="w-25 m-auto p-3 shadow-lg" method="post">
        <h3 class="text-center">គិតលេខ</h3>
        <div class="mb-3">
            <label for="" class=" form-label">num1</label>
            <input type="text" name="num1"  class=" form-control">
        </div>
               <div class="mb-3">
            <label for="" class=" form-label">num2</label>
            <input type="text" name="num2"  class=" form-control">
        </div>
        <div class="mb-3">
            <button type="submit" name="op" value="plus" class="btn btn-primary">+</button>
            <button type="submit" name="op" value="minus" class="btn btn-primary">-</button>
         
        </div>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $op = $_POST['op'];
        // echo $num1;
        // echo $num2;
        // echo $op;

        // use for find sum of both number 
        function add($n1,$n2){
            return $n1+$n2;
        }

        // use for minus both number
        function minus($n1,$n2){
            return $n1 - $n2;
        }

        if($op == "plus"){
            echo "Your result is :".add($num1,$num2);
        }else if($op == "minus"){
            echo "Yoour result equal :" .minus($num1,$num2);

        }



    }
    
    
    
    ?>
    
</body>
</html>
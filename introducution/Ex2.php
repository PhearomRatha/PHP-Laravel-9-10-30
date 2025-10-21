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
    <form class="w-25 shadow-lg rounded-3 p-4 mt-3" method="POST">
        <h3>Calculate Average</h3>
        <div class="mb-2">
            <label for="" class=" form-label">Score 1</label>
            <input type="number" class=" form-control" placeholder="score 1" name="s1">
        </div>
        <div class="mb-2">
            <label for="" class=" form-label">Score 2</label>
            <input type="number" class=" form-control" placeholder="score 2" name="s2">
        </div>
        <div class="mb-2">
            <label for="" class=" form-label">Score 3</label>
            <input type="number" class=" form-control" placeholder="score 3" name="s3">
        </div>
        <div class="mb-2">
            <label for="" class=" form-label">Score 4</label>
            <input type="number" class=" form-control" placeholder="score 4" name="s4">
        </div>
        <div class="mb-2">
            <label for="" class=" form-label">Score 5</label>
            <input type="number" class=" form-control" placeholder="score 5" name="s5">
        </div>
        <div class="mb-2">
            <button class="btn btn-primary w-100" name="send" type="submit">Calculate</button>

        </div>
    </form>
    <table class="table w-75 mt-5">
                <thead>
                <tr>
                        <th>Score1</th>
                        <th>Score2</th>
                        <th>Score 3</th>
                        <th>Score4</th>
                        <th>Score 5</th>
                        <th>Total</th>
                        <th>Average</th>
                        <th>Grade</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                    include "Ex2Code.php";
                    
                    ?>

                </tbody>
          
            </table>
   
</body>

</html>
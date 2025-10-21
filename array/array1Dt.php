<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .box{
        width: 200px;
        height: 200px;
        border-radius: 10px;
        background-color: red;
        float: left;
        margin-left: 100px;

        

    }
</style>
<body>
    <?php

    $colors = ['yellow',"green","black","pink"];
    foreach($colors as $value){
        echo "    <div class='box' style='background-color:$value'></div>";
    }
    
    ?>

    
</body>
</html>
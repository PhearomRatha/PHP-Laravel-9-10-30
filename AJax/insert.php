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
    <form class="w-25 shadow-lg p-3 m-auto" id="form">
        <h3>Form product</h3>
        <input type="text" id="name" placeholder="product name" class="form-control"> <br>
        <input type="number" id="qty" placeholder="product qty" class="form-control"> <br>
        <input type="text" id="price" placeholder="product price" class="form-control"> <br>
        <button type="submit" class="btn btn-info w-100">send</button>

    </form>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
       $(document).ready(function(){
        $("#form").submit(function(e){
            e.preventDefault();
            // new object
            let formdata = new FormData();

           
            formdata.append("pro_name",$("#name").val());
            formdata.append("pro_qty",$("#qty").val());
            formdata.append("pro_price",$("#price").val());

            $.ajax({
                url:"insertData.php",
                type:"POST",
                data:formdata,
                processData:false,
                contentType:false,

                success:function(respond){
                    console.log(respond);
                    if(respond == "insert success"){
                        alert("insert to db success");
                        // redirect
                        window.location.href="index.php";
                    }

                },
                error:function(){
                    alert( "fail to add or ajax error");
                }
                



            })



        })
       })

    </script>
    
</body>
</html>
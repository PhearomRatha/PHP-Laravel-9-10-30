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
    <form  class=" p-3 m-auto " style="display: none; width: 80%;" id="formEdit">
        <h3>Update</h3>
        <input type="hidden" id="id">
        <input type="text" id="name"> 
        <input type="text"  id="price"> 
        <input type="text"  id="qty"> 
        <button type="submit">Update</button>
    </form>


    <a href="insert.php" class="btn btn-secondary m-4">Add</a>
    <table class="table w-75 m-auto text-center">
        <thead class="table-dark ">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>QTY</th>
                <th>Price</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody id="body"></tbody>
    </table>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
let showData;

    $(document).ready(function(){
        // selct data to show
      showData  =  function (){
            $.ajax({
                url:"select.php",
                type:"POST",

                dataType:"json",
                success:function(res){
                    console.log(res);
                    let result="";
                    $(res).each(function(index,row){
                        result += `
                                      <tr>
                                        <td>${row.id}</td>
                                        <td>${row.pro_name}</td>
                                        <td>${row.pro_price}</td>
                                        <td>${row.pro_qty}</td> 
                                        <td> <a class="btn btn-danger" onclick="removeProduct(${row.id})"> Remove </a> </td>
                                        <td> <a class="btn btn-primary" onclick="edit(${row.id})"> update </a> </td>
                                    </tr>
                        
                                 `;
                    })
                  //  document.getElementById("body").innerHTML=result;
                     $("#body").html(result);  
                },
                 error:function(err){
                    console.log(err);
                    

                 }
           
            })
        }
        // call function show data
        showData();

    })

    function removeProduct(code){
        console.log(code);
       if(confirm("Are you sure to remove this product")){
            $.ajax({
                url:"remove.php",
                type:"POST",
                // key   value
                data:{key:code},

                success:function(respond){
                    console.log(respond);
                    if(respond == "remove successfuully"){
                        alert("remove success");
                         showData();
                    }
                    
                },
                error:function(err){
                    console.log(err);
                    
                }
            })
        }
    }
        //edit function to show data  
     function edit(code){
        console.log(code);
        $.ajax({
            url:"edit.php",
            type:"POST",
            data:{id:code},

            dataType:"json",
            success:function(res){
                console.log(res);
                $("#id").val(res.id);
                $("#name").val(res.pro_name);
                $("#price").val(res.pro_price);
                $("#qty").val(res.pro_qty);
                $("#formEdit").show();
                
            },
            error:function(err){
                console.log(err);
                
            }


        })
        


     }

    //update
    $("#formEdit").submit(function(e){
    e.preventDefault();
    let formdata = new FormData();
    formdata.append("id",$("#id").val());
    formdata.append("pro_name",$("#name").val());
    formdata.append("pro_qty",$("#qty").val());
    formdata.append("pro_price",$("#price").val());
     console.log(formdata);
     
    $.ajax({
        url:"update.php",
        type:"POST",
        data:formdata,
        processData: false,
        contentType: false,

        success:function(res){
            console.log(res);
            if(res == "update success"){
                alert("update success");
                $("#formEdit").hide();
                showData();
            }

            
        },
        error:function(err){
            console.log(err);
            
        }

    })


    })
       
</script>
    
</body>
</html>
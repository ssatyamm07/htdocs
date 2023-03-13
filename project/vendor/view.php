<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .product
        {
            width: 300px;
            height: 300px;
            display: inline-block;
            padding: 10px;
            border:5px solid black;
            margin: 10px;
            margin-top: 20px;
            background-color:olive;


        }
        img
        {
            width: 100%;
            height: 200px;
            border-radius: 10px;

        }
        .name
        {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-weight: 800;
            color: white;
            text-align: left;
            

        }
        .price{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            color: burlywood;
            text-align: left;
            
        }
        .details{
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-weight: 800;
            color: white;
            text-decoration:solid
        }
        .action_edit{
            background-color: yellow;
            padding: 5px 8px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }.action_delete{
            background-color: red;
            padding: 5px 8px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }
        .action{
            display: flex;
            justify-content: space-around;
        }

    </style>
</head>
<body>
    
</body>
</html>



<?php

include_once "../shared/connection.php";

$cmd= "SELECT * FROM products";

$sql_result=mysqli_query($conn,$cmd);

//print_r($sql_result);

//$row=mysqli_fetch_assoc($sql_result);

while($row=mysqli_fetch_assoc($sql_result))
{
    $pid=$row['pid'];
    $name=$row['name'];
    $price=$row['price'];
    $details=$row['details'];
    $impath=$row['impath'];

    echo "
    <div class='product'>
        <img src='$impath'>
        <div class='name'>$name </div>
        <div class='price'>$price </div>
         
        <div class='details'> $details </div> 
        <div class='action'>
           <a href='upload.php'>
           <button class='action_edit'>Edit</button>
           <a href='delete_pdt.php?pid=$pid'>
           <button class='action_delete'>Delete</button>
           </a>
        </div>
        
        
    </div>";

    
    
    

}


?>
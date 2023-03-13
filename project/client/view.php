<?php 
session_start();
if(!isset($_SESSION['login']))
{
    echo "<h1>illegal Attempt Login First!!!</h1>";
    echo '<a href="loginhere.html">Click here to LOGIN</a>';

    die;
}
if($_SESSION['login']==false)
{
    echo "login failed!";
    die;
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .product
        {
            width: 300px;
            height: 330px;
            display: inline-block;
            padding: 10px;
            border:none;
            margin: 10px;
            margin-top: 10px;
            background-color: cornsilk;
            transition: all 0.3s ease;


        }
        .product:hover {
            transform: scale(1.1);
            border:solid black;
        }


        img
        {
            width: 80%;
            height: 200px;
            border-radius: 10px;

        }
        .name
        {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-weight: 800;
            color: black;
            text-align: left;
            text-decoration:solid;

        }
        .price{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            color: red;
            text-align: left;
            text-decoration-line: underline;
            
        }
        .details{
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            color: black;
            height: 50px;
            width: 100%;

        
        }
        .cart{
            background-color: green;
            padding: 8px 10px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            height: 30px;
            width: 100px;
            
      
        }
        .action{
            display: flex;
            justify-content: space-evenly;
        }
        .tap{
            background-color: yellow;
            padding: 8px 10px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            height: 30px;
            width: 100px;
            
            

        }
        .buy-img
        {
            height: 20px;
            width: 20px;
            
        }
        
    </style>
</head>
<body>
    
</body>
</html>



<?php

include_once "../shared/connection.php";






include "menu_2.html";


$uname=$_SESSION['username'];
$uid=$_SESSION['user_id'];
//echo "<h1>Welcomeback, $uname</h1>";


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
             
             <a href='addcart.php?pid=$pid'>
                <button class='cart'>Add To Cart</button>
             </a> 
             
                
                <a href='#'>
                <button class='tap'><img src='\img\buynow.png' class='buy-img'>Buy now</button>
                
             </a>    
          </div>
        </div>";
}

?>

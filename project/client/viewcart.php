<?php 
session_start();
if(!isset($_SESSION['login']))
{
    echo "<h1>illegal Attempt</h1>";
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
    <style>
        .product
        {
            width: 330px;
            height: 330px;
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
            color: whitesmoke;
            text-align: left;
            
        }
        .details{
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-weight: 800;
            color: white;
            text-decoration:solid
        }
        .cart{
            background-color: tomato;
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
include "menu_2.html";

$uid=$_SESSION['user_id'];
$sql_result=mysqli_query($conn,"SELECT * FROM cart JOIN products ON cart.pdt_id=products.pid WHERE client_id=$uid;");

while($row=mysqli_fetch_assoc($sql_result))
{
    $pid=$row['pid'];
    $name=$row['name'];
    $price=$row['price'];
    $details=$row['details'];
    $impath=$row['impath'];
    $cart_id=$row['cart_id'];

    echo "
    <div class='product'>
        <img src='$impath'>
        <div class='name'>$name </div>
        <div class='price'>$price </div>
    
         
        <div class='details'> $details </div> 
        <div class='action'>
           <a href='deletecart.php?cart_id=$cart_id'>
              <button class='cart'>Remove from Cart</button>
           </a>   
        </div>
        
        
    </div>";

    
    
    

}

?>
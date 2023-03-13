<?php 
session_start();

$uname=$_SESSION['username'];
$uid=$_SESSION['user_id'];

$id=$_GET['pid'];
include_once "..//shared/connection.php";

$sql_result=mysqli_query($conn, "SELECT *  FROM cart WHERE client_id=$uid AND pdt_id=$id ");
$total_row=mysqli_num_rows($sql_result);
if($total_row>0)
{
    echo "<h1>Product already Added to Cart</h1>";
    die;
}
$cmd= "INSERT INTO cart(client_id, client_name, pdt_id) VALUES($uid,'$uname', $id)";

$sql_status=mysqli_query($conn,$cmd);

if($sql_status)
{
    echo "<h1>Added sucessfully</h1> <br>";

    echo "<h2>Go back to add more item</h2>";
    header("location:view.php");

  

}
else
{
    echo "<h1>Failed to add <br> something went wrong!</h1>";
}


?>
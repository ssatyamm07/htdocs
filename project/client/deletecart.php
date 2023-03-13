<?php
$cart_id=$_GET['cart_id'];

include_once "../shared/connection.php";

$sql_status=mysqli_query($conn,"DELETE FROM cart where cart_id=$cart_id");


if($sql_status)
{
    echo "Removed successfully!!";
    header("location:viewcart.php");
}
else
{
    echo "something went wrong!";

}




?>
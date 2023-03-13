<?php
include_once "../shared/connection.php";

$id=$_GET['pid'];
$cmd="DELETE FROM products WHERE pid=$id";
//$sql_status=mysqli_query($conn,$cmd);

if(mysqli_query($conn,$cmd))
{
    echo "deleted successfully!!";
    header('location:view.php');


}
else
{
    echo "failed to delete";

}



?>
<?php

$name=$_POST['name'];
$price=$_POST['price'];
$details=$_POST['details'];


$actual_name=($_FILES ['pdt_img']['name']);

$file_name="../images/$actual_name";
move_uploaded_file($_FILES['pdt_img']['tmp_name'],$file_name);

include_once "../shared/connection.php";

$cmd="INSERT INTO products(impath,name,price,details) VALUES('$file_name','$name','$price','$details')";
$sql_status=mysqli_query($conn,$cmd);

if($sql_status)
{
    echo "product uploaded successfully";
    header("location:view.php");

}
else
{
    echo "failed to upload product";
}

?>
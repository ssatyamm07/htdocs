<?php
$conn= new mysqli("localhost","root","","my_first_database");

if($conn->connect_error)
{
    echo "connection failed";
    die;
}

echo "seccessfull connecton";

mysqli_query($conn,"insert into students(name,age,avg) values('chhota bheem',20,62.5)");
mysqli_query($conn,"insert into students(name,age,avg,gender) values('doremon',19,75.2,'M')");

echo "insertion succcessfull";

?>
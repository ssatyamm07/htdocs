<?php
$uname=$_POST["username"];
$pass1=$_POST["pass1"];
$pass2=$_POST["pass2"];
$address=$_POST["address"];

include_once '../shared/connection.php';

$sql_result=mysqli_query($conn,"SELECT * FROM client WHERE username='$uname'" );
$total_rows=mysqli_num_rows($sql_result);

if($total_rows>0)
{
    echo "<h1>user name is already taken</h1>";
    die;
    
}

$sql = "INSERT INTO client (Username, password, address)
VALUES ('$uname', '$pass1','$address')";

$query_status=mysqli_query($conn, $sql);


if($query_status)
{
    echo "New record created successfully";
    header("location:loginhere.html");
} 
else 
{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>

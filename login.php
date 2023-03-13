<?php

$uname=$_POST['uname'];
$upass=$_POST['upass'];

if($uname=="Ayush" && $upass=="abcd")
{
    header("location:https://www.google.com");
    

}
else
{
    header("location:error.html");
}



?>


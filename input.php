<?php 
$name=$_GET["name"];
$age=$_GET["age"];

if($age>=18)
{
    echo "<h1>$name is a major</h1>";
}
else
{
    echo "<h1> $name is minor</h1>";
}



?>
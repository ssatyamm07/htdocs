<?php 

$n=$_GET['n'];


for($i=1;$i<=$n;$i++)
{
    if($i%2==0)
    {
       echo "<h1>$i is even</h1>";
    }
    else
    {
        echo "<h3>$i is odd</h3>";
    }
    

    
}


?>
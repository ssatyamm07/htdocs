<?php 

    $uname=$_GET['uname'];
    $upass=$_GET['upass'];
    if($uname=="null" && $upass=="null")
    {
        if($uname=="satyam" && $upass=="sksk")
        {
            echo "sucess";
        }
        else
        {
            echo "invalid user";
        }
    }else{
        echo "empty value";
    }

    
    
   
?>
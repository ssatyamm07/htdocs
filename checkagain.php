<?php 
session_start();
$_SESSION['login_status']==false;

if( isset($_POST['uname']) && isset($_POST['upass']) )
{
    if(strlen($_POST['uname'])>0 && strlen($_POST['upass'])>0)
    {
        $uname=$_POST['uname'];
        $upass=$_POST['upass'];

        if($uname=="msd" && $upass=="six")
        {
            $_SESSION['login_status']==true;
            header("location:home.php");    
        }
        else
        {
            echo "<h1>Invalid details</h1>";
        }
        
    }
    else
    {
        echo "empty value";
    }
}
else
{
    echo "bad request";
}


?>
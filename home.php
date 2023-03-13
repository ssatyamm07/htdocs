<?php 
session_start();
if($_SESSION ["login_status"]=false)
{
    echo "illegal access";
    die;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>

    <h1>home page works</h1>
    
</body>
</html>
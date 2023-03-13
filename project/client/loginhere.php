<?php 

include_once '../shared/connection.php';

session_start();
$_SESSION["login"]=false;

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    try {
        
        $uname = mysqli_real_escape_string($conn, $_POST["username"]);
        $password = mysqli_real_escape_string($conn, $_POST["password"]);

        $sql="SELECT * FROM client WHERE username= '$uname' and password= '$password'";

        $result=mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) ==1)
        {
            $row=mysqli_fetch_assoc($result);
            print_r($row);
            $_SESSION['login']=true;
            $_SESSION['username']=$row['username'];
            $_SESSION['user_id']=$row['user_id'];
            echo "successfully";

            header("location:view.php");
            exit;
        }
        else 
        {
            $error= "invalid username or password!!";

            echo "$error";
            

        }
    }
    catch(Exception $e)
    {
        $error= $e->getMessage();
        die("An error occurred:" . $error);
        
    }
}    


?>
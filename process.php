<?php 
require_once('connection.php');
session_start();
    if(isset($_POST['login']))
    {
       if(empty($_POST['email']) || empty($_POST['password']))
       {
            header("location:index.php?Empty= Please Fill in the Blanks");
       }
       else
       {
            $query="select * from users where email='".$_POST['email']."' and password='".$_POST['password']."'";
            $result=mysqli_query($con,$query) or  die((mysqli_error($con)));
            $total_row_fetch=mysqli_num_rows($result);
          
            if($total_row_fetch!=0)
            {
                
                $_SESSION['USER']=$_POST['email'];
                header("location:welcome.php");
            }
            else
            {
                header("location:index.php?Invalid= Please Enter Correct User Name and Password ");
            }
       }
    }
    else
    {
        echo 'Not Working Now Guys';
    }

?>

<?php
session_start();
if(isset($_SESSION['USER'])){
    echo "Welcome :)  ".$_SESSION['USER']."<br><br>";
   echo '<a href="logout.php?logout">Logout</a>';
}
else{
    header("location: index.php");
}
?>

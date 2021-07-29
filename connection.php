<?php
$con=mysqli_connect("localhost", "root", "", "store");
if(!$con){
    echo "Please cheack your connection".mysqli_error($con);
}
// else{
//    echo "done";
// }
?>
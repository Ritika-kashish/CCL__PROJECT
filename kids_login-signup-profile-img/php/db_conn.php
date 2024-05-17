<?php
$conn=new mysqli('localhost','root','','auth_db');
if($conn){
    echo"connected successfully";
}
else{
    die(mysqli_error($conn));
}
?>
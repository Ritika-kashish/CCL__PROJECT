<?php
$conn=new mysqli('localhost','root','','auth_db');
if($conn){
   
}
else{
    die(mysqli_error($conn));
}
?>
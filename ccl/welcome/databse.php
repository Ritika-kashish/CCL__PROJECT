<?php
$servername ="localhost";
$username="root";
$password="";
$database="test2";
$con=new mysqli("$servername","$username","$password","$database");
if($con)
{
    echo"connection stablished successfully";
    
}
else{
    die (mysqli_error($con));
}
?>
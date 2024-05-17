<?php
$conn="";
echo"hello";

try{
    $sName ="localhost";
 $fname="";
 $pass="";
$db_name = "auth_db";

    $conn = new PDO("mysql:host=$sName;dbname=$db_name", $fname,$pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo "Connection failed :".$e->getMessage();
    }
?>
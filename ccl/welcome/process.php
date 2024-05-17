<?php
include 'databse.php';
if(isset($_POST['save']))
{
    $Name=$_POST['n'];
    $Email=$_POST['e'];
    $Address=$_POST['add'];
    $Mobile=$_POST['m'];
    $Gender=$_POST['g'];
    $Hobbies=$_POST['hobb'];
    $chk="";
    foreach ($Hobbies  as $chk1)
    {
        $chk.=$chk1.",";

    }
    $Profile=$_POST['pic'];
    $Date=$_POST['mm'];
    $sql="INSERT INTO `registration`(Name,Email,Address,Mobile_number,Gender,Hobbies,Profile,Date_of_birth) values ('$Name','$Email','$Address','$Mobile','$Gender','$chk','$Profile','$Date ')";
     

    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo "<script>alert('new record inserted')</script>"; 
        echo "<script>window.open('insert.php','_self')</script>";
    }
    else
    {
        "error:".mysqli_error($con);
    }
    mysqli_close($con); 
}
?>
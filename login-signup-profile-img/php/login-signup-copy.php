<?php

echo"hello";
$conn=new mysqli('localhost','root','','auth_db');
if($conn){
   echo"if "; 
}
else{
    die(mysqli_error($conn));
}



    
if (isset($_POST['login']) )
     {
    
        echo"login";
    $fname = $_POST['fname'];
    $pass = $_POST['pass'];
    $conf_pass = $_POST['conf_pass'];

    $data ="fname=".$fname."&pass=".$pass."&conf_pass=".$conf_pass;

    if (empty($fname)) {
        $em = "Full Name is required";
        header("Location: ../login-signup.php?error=$em&$data");
        exit; 
    }else if (empty($pass)){
        $em = "Password is required";
        header("Location: ../login-signup.php?error=$em&$data");
        exit;
    }else if (empty($conf_pass)){
        $em = "Verify your password";
        header("Location: ../login-signup.php?error=$em&$data");
        exit;
    }else {

        $sql = "SELECT fname,password FROM regs"; 
        $stmt = $conn->prepare($sql);
        $stmt->execute([$fname, $pass]);
        echo"stmt";
        $result=mysqli_query($conn,$sql);
        $row_count=mysqli_num_rows($result);
        $regs=mysqli_fetch_Assoc($result);
        echo "$row_count";
        if($row_count == 1){
           
            $fullname =$regs['fname'];
            $password =$regs['password'];
            $pp =$regs['pp'];
            if($fullname === $fname){
                if(password_verify($conf_pass,$Confirm_Password)){
                    //echo"Logged in";
                    $_SESSION['fname'] = $fname;
                    $_SESSION['pp'] = $pp;

             }else{ 
                
                $em = "Incorrect Name or Password";
                header("Location: ../login-signup.php?error=$em&$data");
                 exit;
                }
            }else{ 
                
                $em = "Incorrect Name or Password";
            header("Location: ../login-signup.php?error=$em&$data");
            exit;
        }
    }else{
        
    header("Location: ../login-signup.php?error=error");
    exit;
}}
     }
        
<?php
session_start(); 
$conn=new mysqli('localhost','root','','auth_db');
if($conn){
}
else{
    die(mysqli_error($conn));
}    
if (isset($_POST['login']) )
     {
    $fname = $_POST['fname'];
    $pass = $_POST['pass'];
    $conf_pass = $_POST['conf_pass'];

    $data ="fname=".$fname."&pass=".$pass."&conf_pass=".$conf_pass;

     if (empty($fname)) {
        $em = "Full Name is required";
        header("Location: ../login.php?error=$em&$data");
        exit; 
    }else if (empty($pass)){
        $em = "Password is required";
       header("Location: ../login.php?error=$em&$data");
        exit;
    }else if (empty($conf_pass)){
        $em = "Verify your password";
       header("Location: ../login.php?error=$em&$data");
        exit;
    }else {

        $sql = "SELECT * FROM regs where fname=?"; 
        $stmt = $conn->prepare($sql);
       // $stmt->bind_Param("s",$fname);
        $stmt->execute([$fname]);

        if($stmt->rowCount() == 1){
            $user = $stmt->fetch();

            $fname = $regs['fname'];
            $password = $regs['password'];

            if($fname == $fname){
                if(password_verify($conf_pass, $password)){
                   $_SESSION['fname'] = $fname; 
                   
                   
                   header("Location: ../home.php");
                   exit;
                

        }else{
            echo "Incorrect Name or Password";
            header("Location: ../login.php?error=$em&$data");
            exit;
        }
    }

               // if(password_verify($conf_pass,$password)){
                  //  echo"Logged in";
                    //exit;
             }else{ 
                header("Location: ../login.php?error=$em&$data");
                 exit;
                }
    }

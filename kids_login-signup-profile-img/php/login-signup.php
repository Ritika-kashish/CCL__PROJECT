<?php
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
        //header("Location: ../login-signup.php?error=$em&$data");
        exit; 
    }else if (empty($pass)){
        $em = "Password is required";
       // header("Location: ../login-signup.php?error=$em&$data");
        exit;
    }else if (empty($conf_pass)){
        $em = "Verify your password";
       // header("Location: ../login-signup.php?error=$em&$data");
        exit;
    }else {

        $sql = "SELECT * FROM users where fname=?"; 
        $stmt = $conn->prepare($sql);
        $stmt->bind_Param("s",$fname);
        $stmt->execute();

        $stmt_result=$stmt->get_result();
        if($stmt_result->num_rows>0){
           $users=$stmt_result->fetch_assoc();
            $fullname =$users['fname'];
            $password =$users['password'];            

                if(password_verify($conf_pass,$password)){
                    echo"Logged in";
                    exit;
             }else{ 
                echo "Incorrect Name or Password";
                //header("Location: ../login-signup.php?error=$em&$data");
                 exit;
                }
            }
            
    
}
}
     
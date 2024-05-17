<?php
include " php/db_conn.php ";
    
if (isset($_POST['fname']) && 
    isset($_POST['pass'])  && 
    isset($_POST['mob'])   && 
    isset($_POST['state']) && 
    isset($_POST['occup']) &&
    isset($_POST['email']) && 
    isset($_POST['con']) &&
    isset($_POST['city']) &&
    isset($_POST['conf_pass'])) {
    
        
    $fname = $_POST['fname'];
    $pass = $_POST['pass'];
    $mob = $_POST['mob'];
    $state = $_POST['state'];
    $occup = $_POST['occup'];
    $email = $_POST['email'];
    $con = $_POST['con'];
    $city = $_POST['city'];
    $conf_pass = $_POST['conf_pass'];

    $data ="fname=".$fname."&pass=".$pass."&mob=".$mob."&state".$state."&occup=".$occup."&email=".$email."&con=".$con."&city=".$city."&conf_pass=".$conf_pass;

    if (empty($fname)) {
        $em = "Full Name is required";
        header("Location: ../index.php?error=$em&$data");
        exit; 
    }else if (empty($pass)){
        $em = "Password is required";
        header("Location: ../index.php?error=$em&$data");
        exit;
    }else if (empty($mob)){
        $em = "Mobile Number is required";
        header("Location: ../index.php?error=$em&$data");
        exit;
    }else if (empty($state)){
        $em = "State is required";
        header("Location: ../index.php?error=$em&$data");
        exit;
    }else if (empty($occup)){
        $em = "Occupation is required";
        header("Location: ../index.php?error=$em&$data");
        exit;
    }else if (empty($email)){
        $em = "Email is required";
        header("Location: ../index.php?error=$em&$data");
        exit;
    }else if (empty($con)){
        $em = "Country is required";
        header("Location: ../index.php?error=$em&$data");
        exit;
    }else if (empty($city)){
        $em = "City is required";
        header("Location: ../index.php?error=$em&$data");
        exit;
    }else if (empty($conf_pass)){
        $em = "Verify your password";
        header("Location: ../index.php?error=$em&$data");
        exit;
    }else {
        $sql = "INSERT INTO regs(fname, pass, mob, state, occup, email, con, city) 
                 VALUES(?,?,?,?,?,?,?)";
        $stml = $conn->prepare($sql);
        $stml->execute([$fname, $pass, $mob, $state, $occup, $email, $con, $city]);

        header("Location: ../index.php?success = You have been registered");
        exit;
    }
}
else{
    header("Location: ../index.php?error=error");
    exit;
}
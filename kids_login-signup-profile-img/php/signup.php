<?php

$conn=new mysqli('localhost','root','','auth_db');
if($conn){
    
}
else{
    die(mysqli_error($conn));
}
    
if (isset($_POST['sign_up']) )
     {
    
        
    $fname = $_POST['fname'];
    $pass = $_POST['pass'];
    $state = $_POST['state'];
    $con = $_POST['con'];
    $city = $_POST['city'];
    $conf_pass = $_POST['conf_pass'];

    $data ="fname=".$fname."&pass=".$pass."&state".$state."&con=".$con."&city=".$city."&conf_pass=".$conf_pass;

    if (empty($fname)) {
        echo "Full Name is required";
        header("Location: ../index.php?error=$em&$data");
        exit; 
    }else if (empty($pass)){
        echo "Password is required";
        header("Location: ../index.php?error=$em&$data");
        exit;
    }else if (empty($state)){
       echo "State is required";
        header("Location: ../index.php?error=$em&$data");
        exit;
    }else if (empty($con)){
       echo "Country is required";
        header("Location: ../index.php?error=$em&$data");
        exit;
    }else if (empty($city)){
        echo "City is required";
        header("Location: ../index.php?error=$em&$data");
        exit;
    }else if (empty($conf_pass)){
        echo "Verify your password";
        header("Location: ../index.php?error=$em&$data");
        exit;
    }else {
        //hashing the password
        $pass = password_hash($pass, PASSWORD_DEFAULT);
        
        if(isset($_FILES['pp']['name']) AND !empty($_FILES['pp']['name'])){
          
           // print_r($_FILES['pp']);
           // echo "</pre>";

            $img_name = $_FILES['pp']['name'];
           // $img_size = $_FILES['pp']['size'];
            $tmp_name = $_FILES['pp']['tmp_name'];
            $error = $_FILES['pp']['error'];

           // echo $img_name ;

           if($error == 0){
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
           // echo  $img_ex;
           $img_ex_to_lc = strtolower($img_ex);

           $allowed_exs = array ('jpg', 'jpeg', 'png');
           if(in_array($img_ex_to_lc, $allowed_exs)){
            $new_img_name = uniqid("$fname",true ).'.'.$img_ex_to_lc;
           // echo $new_img_name;
           $img_upload_path = '../upload/'.$new_img_name;
           move_uploaded_file($tmp_name,$img_upload_path);

           //insert into database
           $sql = "INSERT INTO users(fname, password, state, country, city,pp) 
                   VALUES(?,?,?,?,?,?)";
           $stml = $conn->prepare($sql);
           $stml->execute([$fname, $pass, $state, $con, $city, $new_img_name]);
                  header("Location: ../index.php?success = You have been registered");
                 exit;
}

           }else{
            echo "You can't upload files of this type.";
            header("Location: ../index.php?error=$em&$data");
            exit;
           }

           }else{   
            echo "unknown error occured!!";
            header("Location: ../index.php?error=$em&$data");
            exit;

           }

        }//else{
            //insert into database
         $sql = "INSERT INTO users(fname, password, state, country, city) 
                 VALUES(?,?,?,?,?)";
        $stml = $conn->prepare($sql);
        $stml->execute([$fname, $pass, $state, $con, $city]);

        header("Location: ../index.php?success = You have been registered");
        exit;
    }
    //}
else{
    header("Location: ../index.php?error=error");
    exit;
}
<?php
$conn = mysqli_connect('localhost', 'root', '', 'client');

$login= false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
   
    include 'partials/_dbconnect.php';
    $fname = $_POST["fname"];
    $password = $_POST["password"];
    $conf_pass = $_POST["conf_pass"];
   // $exists = false;
    $sql = "Select * from users where fname='$fname' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
       if ($num == 1){
            $login = true;
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['fname'] = $fname;
            header("location: home.php");
        }

else {
    $showError = "Invalid Credentials";
}
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title> Login <?php $_SESSION['username']?></title>
  </head>
  <body>
  <?php require 'partials/_nav.php' ?>

    <?php
    if($login){
     echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong> Success!!!</strong> You are logged in
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ' ;
    }
    if($showError){
        echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
           <strong> Error!!!</strong> '.$showError.'
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
           </button>
       </div> ' ;
       }
    ?>
    <div class ="container my-4">
        <h1 class="text-center"> Login to the Website </h1>
        <form class="shadow w-450 p-3" 
                  action="/loginsystem/login.php" 
                  method="POST"
                  enctype="multipart/form-data">

                <div class="form-group col-md-9">
                    <label class="form-label"><b>First Name</b></label>
                    <input type="text" 
                           class="form-control" 
                           name="fname"
                           value="<?php echo (isset($_GET['fname']))?$_GET['fname']:
                           "" ?>">
                </div>

                <div class="form-group col-md-9">
                <label class="form-label"><b>Password</b></label>
                    <input type="password" 
                           class="form-control" 
                           name="password">
                </div>
                
                <div class="form-group col-md-9">
                <label class="form-label"><b>Confirm Password</b></label>
                    <input type="password" 
                           class="form-control" 
                           name="conf_pass">
                </div>  
                <button type="submit" class="btn btn-primary form-group ">Login</button>
    </div>
<!-- footer section starts -->

    <section class="footer">
    <div class="box-conatiner my-9">
      <div class="box">
        <h3>Quick links</h3>
        <a class="nav-link"  href="/loginsystem/login.php"> <i class="fas fa-angle-right"></i>Login</a>
        <a class="nav-link" href="/loginsystem/signup.php"> <i class="fas fa-angle-right"></i>Signup</a>
        <a class="nav-link" href="/loginsystem/logout.php"> <i class="fas fa-angle-right"></i>Logout</a>
        <a class="nav-link" href="/loginsystem/home.php"> <i class="fas fa-angle-right"></i>Home</a>
        <a class="nav-link" href="/loginsystem/about_us.php"> <i class="fas fa-angle-right"></i>About Us</a>
      </div>
      
      <div class="box">
        <h3>Extra links</h3>
        <a class="nav-link" href="#"> <i class="fas fa-angle-right"></i>Ask Questions</a>
        <a class="nav-link" href="#"> <i class="fas fa-angle-right"></i>Blogs</a>
        <a class="nav-link" href="#"> <i class="fas fa-angle-right"></i>Media</a>     
      <a class="nav-link" href="#"> <i class="fas fa-angle-right"></i>What we do</a>
      </div>

      <div class="box">
        <h3>Reach Us</h3>
        <a class="nav-link" href="#"> <i class="fas fa-phone"></i> +91-9846573236</a>
        <a class="nav-link" href="#"> <i class="fas fa-phone"></i> +91-9846575654</a>
        <a class="nav-link" href="#"> <i class="fas fa-envelope"></i>newbeginning@gmail.com</a>
        <a class="nav-link" href="#"> <i class="fas fa-map"></i>ranchi,india - 834004</a>
      </div>
      
      <div class="box">
        <h3>Follow Us</h3>    
        <a class="nav-link" href="#"> <i class="fab fa-facebook"></i> Facebook</a>
        <a class="nav-link" href="#"> <i class="fab fa-twitter"></i> Twitter</a>
        <a class="nav-link" href="#"> <i class="fab fa-instagram"></i>Instagram</a>
        <a class="nav-link" href="#"> <i class="fab fa-linkedin"></i>Linkedin</a>
      </div>

    </div>
    <div class="credit"> Created by <span > Ritika </span> | All rights reserved! </div>
  </section>

  <!-- footer section ends -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
 
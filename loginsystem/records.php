<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location: details.php");
  exit;
}


$conn = mysqli_connect('localhost', 'root', '', 'records');

$showAlert = false;
$showError = false;
if (isset($_POST['submit'])) {
   
  include 'partials/db_connect.php';
  $fname = $_POST["fname"];
  $mobile = $_POST["mobile"];
  $city = $_POST["city"];
  $state = $_POST["state"];
  $country = $_POST["country"];
  $email = $_POST["email"];
  $kname = $_POST["kname"];
  $school = $_POST["school"];
  $exists = false;


    {
        $sql = "INSERT INTO `kids` (`fname`, `mobile`, `city`, `state`, `country`, `email`, `kname`, `school`, `dt`) 
                VALUES ('$fname', '$mobile', '$city', '$state', '$country', '$email' `$kname` , `$school`, current_timestamp())";

           
        
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

    <title> Details <?php $_SESSION['username']?></title>
  </head>
  <body>
    <?php require 'partials/_nav.php' ?>
    <?php
    if($showAlert){
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
        <!-- home section starts -->
<section class="home">
  <div class="home-slider">
    <div class="w">
      <div class="slide" ></div>
          <div class="content">
          <img src="images/pic-1.jpg" alt="">                              
          <span> </span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- home section ends -->





    <div class ="container my-4">
        <h1 class="text-center"> Details </h1>
        <form class="shadow w-450 p-3" 
                  action="/loginsystem/records.php" 
                  method="POST"
                  enctype="multipart/form-data">


                <div class="form-group col-md-9">
                    <label class="form-label">Foster Name</label>
                    <input type="text" 
                           class="form-control" 
                           name="fname"
                           value="<?php echo (isset($_GET['fname']))?$_GET['fname']:
                           "" ?>">
                </div>
                
                
                <div class="form-group col-md-9">
                    <label class="form-label">Mobile Number</label>
                    <input type="text" maxlength = "10"
                           class="form-control" 
                           name="mobile">
                </div>

                
                <div class="form-group col-md-9">
                    <label class="form-label">City</label>
                    <input type="text" 
                           class="form-control" 
                           name="city">
                </div>

                <div class="form-group col-md-9">
                    <label class="form-label">State</label>
                    <input type="text" 
                           class="form-control" 
                           name="state">
                </div>

                <div class="form-group col-md-9">
                    <label class="form-label">Country</label>
                    <input type="text" 
                           class="form-control" 
                           name="country">
                </div>


                <div class="form-group col-md-9">
                    <label class="form-label">Email</label>
                    <input type="email" 
                           class="form-control" 
                           name="email">
                </div>

                
                <div class="form-group col-md-9">
                    <label class="form-label">Child Adopted</label>
                    <input type="text" 
                           class="form-control" 
                           name="kname">
                </div>  


                
                <div class="form-group col-md-9">
                    <label class="form-label">School admitted to:</label>
                    <input type="text" 
                           class="form-control" 
                           name="school">
                </div>  



            

        <input type="submit"  name="submit" class="btn btn-primary form-group">
        <button type="reset" class="btn btn-primary form-group ">Reset</button>
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
        <a class="nav-link" href="#"> <i class="fas fa-envelope"></i>newbeggining@gmail.com</a>
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
 
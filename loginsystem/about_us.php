<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
  if ($_SERVER['REQUEST_URI'] !== '/loginsystem/about_us.php') {
    header("location: about_us.php");
    exit;
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

    <title><b> ABOUT : <?php echo $_SESSION['fname']; ?></b></title>

     <!-- font aweosme cdn link -->
     <link rel = "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  </head>
  <body>
  </body>
  <?php require 'partials/_nav.php' ?>
    <!-- header section starts -->
  <section class ="header">
    <a href="about_us.php"></a>
  </section>
    <!-- header section ends -->

  <!-- swiper js linbk -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- cutom js file link -->
<script src = "js/script.js"></script>

<!-- footer section starts -->
 <div class="container">
      <div class="image">
      <img src="images/pic-abt.1.jpg" alt="">
      </div>
      <div class="text">
      <h2 style="color:bisque;"><b>"Adoptive parents become the biological parents through connection. we change their biology"- Dr. karyn Purvis</b></h2>
      </div>
    </div>
<section class="footer">
<div class="box-conatiner my-9">
<div class="box"> <h3> About Us </h3>
      <p> <h4 style="color:mediumvioletred">This project was developed by a group of us students throughout the summer.  But we'd want to keep on with this effort to advance a good cause and for the sake of society.</h4></p> 
</div>
</div>
</section>
  <section class="footer">
    <div class="box-conatiner my-9">
      <div class="box">
        <h3>Quick links</h3>
        <a class="nav-link" href="/loginsystem/login.php"> <i class="fas fa-angle-right"></i>Login</a>
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
        <h3>Contact info</h3>
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
<?php
session_start();

if(isset($_SESSION['fname'])){
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Display</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <div class="d-flex justify-content-center align-items-center vh-100">
            <div class="shadow w-350 p-3 text-center">
                <img src ="upload/<?=$_SESSION['pp']?>"
                class="img-fluid rounded-circle">
            <h3 class ="display-4"> Welcome,<?=$SESSION['fname']?></h3>   
            <button type="submit" class="btn btn-primary" name="Logout">Logout</button>
            <a href="login.php" class="link-secondary">Login</a> 
            
        </div>
    </div>
</body>
</html>
<?php }else{
    header("Location: login-signup.php");
    exit;
}

?>
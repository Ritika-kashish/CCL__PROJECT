<?php
session_start();
if(isset($_SESSION['fname']) && isset($_SESSION['password'])){
    ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <div class="d-flex justify-content-center align-items-center vh-250">
            <div class="shadow w-450 p-3" >
                <h3 class="display-4"> Welcome, <?=$_SESSION['fname']?></h3>
                <a href="logout.php" class="btn btn-warning">
                    Logout
</a>
            </div>
        </div>
    </body>
</html>
<?php } else{
    header("Location: ../login.php");
}
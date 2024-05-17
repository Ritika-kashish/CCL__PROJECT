<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <div class="d-flex justify-content-center align-items-center vh-250">
        <?php error_reporting(0); ?>
            <form class="shadow w-450 p-3" 
                  action="login-signup.php" 
                  method="POST">
                  
                <h4 class="display-4 text-center fs-1">LOGIN</h4><br>
                <?php if(isset($_GET['success'])){ ?>
                <div class="alert alert-success" role="alert">
                 <?php echo $_GET['success']; ?>
                </div> 
                <?php } ?>
                <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <input type="text" 
                           class="form-control" 
                           name="fname"
                           value="<?php echo (isset($_GET['fname']))?$_GET['fname']:
                           "" ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" 
                           class="form-control" 
                           name="pass">
                </div>

                <div class="mb-3">
                    <label class="form-label">Confirm Password</label>
                    <input type="password" 
                           class="form-control" 
                           name="conf_pass">
                </div>  
    <button type="submit" class="btn btn-primary" name="login">Login</button>
    <a href="index.php" class="link-secondary">Sign-Up</Sign-Up></a>
</form>
        </div>
    </body>

</html>
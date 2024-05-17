<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>sign-Up</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <div class="d-flex justify-content-center align-items-center vh-250">
        <?php error_reporting(0); ?>
            <form class="shadow w-450 p-3" 
                  action="php/signup.php" 
                  method="POST"
                  enctype="multipart/form-data">

                <h4 class="display-4 text-center fs-1"> Registration</h4><br>
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
                    <label class="form-label">Mobile Number</label>
                    <input type="text" maxlength = "10"
                           class="form-control" 
                           name="mob">
                </div>
                
                <div class="mb-3">
                    <label class="form-label">City</label>
                    <input type="text" 
                           class="form-control" 
                           name="city">
                </div>


                <div class="mb-3">
                    <label class="form-label">State</label>
                    <input type="text" 
                           class="form-control" 
                           name="state">
                </div>

                <div class="mb-3">
                    <label class="form-label">Country</label>
                    <input type="text" 
                           class="form-control" 
                           name="con">
                </div>

                <div class="mb-3">
                    <label class="form-label">Occupation</label>
                    <input type="text" 
                           class="form-control" 
                           name="occup">
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" 
                           class="form-control" 
                           name="email">
                </div>




                <div class="mb-3">
                    <label class="form-label">Confirm Password</label>
                    <input type="password" 
                           class="form-control" 
                           name="conf_pass">
                </div>  
                
		  <div class="mb-3">
		    <label class="form-label">Profile Picture</label>
		    <input type="file" 
		           class="form-control"
		           name="pp">
		  </div>
		  
                <tr>  
    <td> <b> Select an option </b> </td>  
    <td>  
        <select name="">  
            <option value="">Select</option>
           <option value=""> Become a volunteer</option>  
           <option value=""> Adoption</option> 

            <?php   
            ?>  
        </select>  
        </tr>  
    <button type="submit" class="btn btn-primary" name="sign_up">Sign-Up</button>
    <a href="login.php" class="link-secondary">Login</a>
</form>
        </div>
    </body>

</html>
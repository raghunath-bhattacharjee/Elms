<?php 
    // Handle error
    include('../Error/Error.php');
    include('../Model/Admin.php');
    
    if (isset($_POST['submit'])) {
        $adminObj = new Admin();
        
        $email = $_POST['email'];
        $pass = $_POST['password'];
       
        $adminObj->validateSignInfo($email, $pass);
        // Error handelling
        $errorCode = isset($_SESSION['error']) ? $_SESSION['error'] : 0;
        $errorText = CodeError::hasError($errorCode);
    } else {
        unset($_SESSION['error']);
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin Login</title>
        <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
        <style>
            body{
                background: #f3eee8;
            }
            .card {
                box-shadow: 0 1px 1px 0 rgba(60,75,100,.14), 0 2px 1px -1px rgba(60,75,100,.12), 0 1px 3px 0 rgba(60,75,100,.2);
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-3">
                    <div class="card" style="margin-top:17%; padding:20px">
                        <div class="card-header">
                            <h4> Admin LogIn</h4>
                            <p>
                                Please enter your details.
                            </p>
                            <?php if ($errorText){ ?>
                                <div class="alert alert-danger" style="text-align:center">
                                    <?php print($errorText); ?>
                                </div>
                            <?php } ?>
                        </div>
                        <br>
                        <form class="form-group" method="POST" action="">
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" placeholder="Enter your email" required> 
                            </div>
                            
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Enter your password" required>
                            </div>
    
                            <hr>
                           <div>
                               <input type="submit" value="Sign In" name="submit" class="btn btn-outline-primary">

                               <a style="float:right" href="./forgotpassword.php"> Forgot password </a>
                           </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
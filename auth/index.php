<?php 
    session_start();
    //Save & Authenticate
    include('../Model/User.php');
    // Handle error
    include('../Error/Error.php');
    
    if (isset($_POST['submit'])) {
        $user = new User();
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $pass = $_POST['password'];
        $cpass = $_POST['confirm_npassword'];

        $user->validateSignUpInfoAndSave($name, $email, $phone, $pass, $cpass);
        
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
    <title>SIgn Up</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <style>
    body {
        background: #f3eee8;
    }

    .card {
        box-shadow: 0 1px 1px 0 rgba(60, 75, 100, .14), 0 2px 1px -1px rgba(60, 75, 100, .12), 0 1px 3px 0 rgba(60, 75, 100, .2);
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3">
                <div class="card" style="margin-top:10%; padding:20px">
                    <div class="card-header">
                        <h4> Sign Up</h4>
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
                            <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Enter your email"
                                required>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="phone" placeholder="Enter your phone"
                                required>
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" name="password"
                                placeholder="Enter your password" required>
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" name="confirm_npassword"
                                placeholder="Enter your confirm password" required>
                        </div>
                        <hr>
                        <div>
                            <input type="submit" name="submit" value="Sign Up" class="btn btn-outline-primary">

                            <a style="float:right" href="./signin.php"> Do you have an account? </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
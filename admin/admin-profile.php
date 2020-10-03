<?php 
    include('./AuthAdmin.php'); 
    include('../Error/Error.php');
    include('../Model/Admin.php');
    
    $adminObj = new Admin();
    $admin = $adminObj->getAdmin();

    // $db = new Database();
    // $con = $db->connection();
    
    // $Query = "SELECT * FROM admin";
    // $result = $con->query($Query);
    // $admin =  mysqli_fetch_assoc($result);


    if ($_POST['submit']) {
        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];

        if ($_POST['new_password'] != '') {
            $newPassword = $_POST['new_password'];
        } else {
            $newPassword =  $admin['password'];
        }

        $about = $_POST['about'];

        $adminObj = new Admin();
        $adminObj->updateAdmin($name, $username, $email, $newPassword, $about);
        
        // Error handelling
        $errorCode = isset($_SESSION['error']) ? $_SESSION['error'] : 0;
        $errorText = CodeError::hasError($errorCode);
    } else {
        unset($_SESSION['error']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Profile</title>
  <?php include('./theme/head.php'); ?>
</head>

<body class="">
  <div class="wrapper ">
    
    <?php include('./theme/sidebar.php'); ?>

    <div class="main-panel">
      <!-- Navbar -->
      <?php include('./theme/navbar.php'); ?>

      <!-- End Navbar -->
        <div class="content">
            <div class="row">
                <div class="col-md-10">
                    <div class="card" style="padding:20px">
                        <div class="content">
                            <h4>Admin info</h4>
                            <form method="post" action="">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control border-input" name="name" placeholder="Full name" value="<?php print($admin['fullname']); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" class="form-control border-input" name="username" placeholder="Username" value="<?php print($admin['username']); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control border-input" name="email" placeholder="Email" value="<?php print($admin['email']); ?>">
                                        </div>
                                    </div>
                                </div>
        
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Old Password</label>
                                            <input type="text" class="form-control border-input" name="old_password" placeholder="old password" disabled value="<?php print($admin['password']); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>New Password</label>
                                            <input type="text" class="form-control border-input" name="new_password" placeholder="New Password" value="">
                                        </div>
                                    </div>
                                </div>
        
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>About</label>
                                            <input type="text" class="form-control border-input" name="about" placeholder="About" value="<?php print($admin['about']); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <input type="submit" name="submit" value="Update Admin"class="btn btn-info btn-fill btn-wd">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
      
      
      
      <?php include('./theme/footer.php'); ?>
    </div>
  </div>
</body>
</html>

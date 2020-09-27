<?php 
  include('./AuthAdmin.php');
  include('../Model/User.php');

  if ($_GET['user_id']) {
    $userObj = new User();
    $userObj->deleteUser($_GET['user_id']);
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student List</title>
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
          <?php include('./project/student-content.php'); ?>
        </div>
      </div>
      
      <?php include('./theme/footer.php'); ?>

    </div>
  </div>
</body>
</html>

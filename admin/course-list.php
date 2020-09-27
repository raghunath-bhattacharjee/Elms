<?php 
  include('./AuthAdmin.php'); 
  include('../Model/Course.php');
  
  $courseDeleteMsg = null;
  if ($_GET['course_id']) {
    $courseObject = new Course();
    $isCourseDeleted = $courseObject->deleteCourse($_GET['course_id']);

    if ($isCourseDeleted) {
      $courseDeleteMsg = 'Course deleted successfully';
    }
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Course List</title>
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
          <div class="col-md-6" style="padding-left: 0px">
            <a href="./add-course.php">
              <button class="btn btn-primary"> Add New Course </button>
            </a>
          </div>
        </div>
        <div class="row">
          <?php if ($courseDeleteMsg) { ?>
              <span class="alert alert-success">
                <?php print($courseDeleteMsg); ?>
              </span>
          <?php }

            include('./project/course-content.php'); 
          ?>
        </div>
      </div>
      <?php include('./theme/footer.php'); ?>
    </div>
  </div>
</body>
</html>

<?php 
  include('../Model/Course.php');
  $courseObj = new Course();

  $course = $courseObj->findCourse($_GET['course']);
  if ($course->num_rows == 0) {
    header('location: ../404.html');
  } else {
	$course = mysqli_fetch_assoc($course);
  }
?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
  <title>Course Details</title>
  <?php include('./theme/head.php'); ?>
</head>

<body>
  <?php include('./theme/header.php'); ?>

  <!-- ================ start banner Area ================= -->
  <section class="home-banner-area">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-12 banner-right">
					<h1 class="text-white">
						Course Details
					</h1>
					<p class="mx-auto text-white  mt-20 mb-40">
						In the history of modern astronomy, there is probably no one greater leap forward than the building.
					</p>
					<div class="link-nav">
						<span class="box">
							<a href="index.html">Home </a>
							<i class="lnr lnr-arrow-right"></i>
							<a href="contacts.html">Course Details</a>
						</span>
					</div>
				</div>
			</div>
		</div>
		<br><br>
	</section>
  <!-- ================ End banner Area ================= -->

 
  <!-- ================ Start Popular Course Area ================= -->
  <section class="popular-course-area">
    <div class="container" style="margin-top: 6%;margin-bottom: 8%;">
		<h2>Course: <?php print($course['course_name']); ?></h2>
		<br>
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <img style="max-width: 695px;margin: auto;" src="./img/courses/<?php print($course['course_image']); ?>" class="course-image" />
                    </div>
                    <div class="card-body">
                        <span>Duration: <?php print($course['course_duration']); ?></span><br>
                        <span>Price: <?php print($course['course_price']); ?></span><br><br>
                        <span><?php print($course['course_type']); ?></span><br><br>
                        <p><?php print($course['course_objective']); ?></p><br><br>
                        <p><?php print($course['course_eligibility']); ?></p><br><br>
                        <p class="card course-info"><?php print($course['course_outline']); ?></p>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary"> Pay & Submit</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
				<h4 style="margin-top: -45px;"> <i class="fa fa-info-circle"> </i> Recommended Courses</h4>
				<br>
                <div class="card">
                    <div class="card-header">
                        <img src="./images/course-2.png" class="course-image" />
                    </div>
                    <div class="card-body">
                        <h2>React js</h2>
                        <span>Duration: 0-1 Month</span><br>
                        <span>Price: INR 10,000/-</span><br><br>
                        <p class="card course-info">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary"> Enroll now</button>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <img src="./images/course-2.png" class="course-image" />
                    </div>
                    <div class="card-body">
                        <h2>React js</h2>
                        <span>Duration: 0-1 Month</span><br>
                        <span>Price: INR 10,000/-</span><br><br>
                        <p class="card course-info">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary"> Enroll now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
  <!-- ================ End Popular Course Area ================= -->

  <?php include('./theme/footer.php'); ?>
</body>
</html>

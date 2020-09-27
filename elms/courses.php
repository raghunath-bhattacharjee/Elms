<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
  <title>Courses</title>
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
						Courses
					</h1>
					<p class="mx-auto text-white  mt-20 mb-40">
						In the history of modern astronomy, there is probably no one greater leap forward than the building.
					</p>
					<div class="link-nav">
						<span class="box">
							<a href="index.html">Home </a>
							<i class="lnr lnr-arrow-right"></i>
							<a href="contacts.html">Contacts</a>
						</span>
					</div>
				</div>
			</div>
		</div>
		<br><br>
	</section>
  <!-- ================ End banner Area ================= -->

 
  <!-- ================ Start Popular Course Area ================= -->
  <section class="popular-course-area section-gap">
    <div class="container-fluid">
		<div class="row">
			<?php include('./partials/course-list.php'); ?>
		</div>
    </div>
  </section>
  <!-- ================ End Popular Course Area ================= -->

  <?php include('./theme/footer.php'); ?>
</body>
</html>

<?php session_start(); ?>
<header class="default-header">
		<nav class="navbar navbar-expand-lg  navbar-light">
			<div class="container">
				<a class="navbar-brand" href="index" style="color:white">LMS</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="lnr lnr-menu"></span>
				</button>

				<div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
					<ul class="navbar-nav">
						<li><a href="index.php">Home</a></li>
						<!-- <li><a href="discussion.php">Discussion</a></li> -->
						<li><a href="courses.php">Courses</a></li>
						<li><a href="contact.php">Contacts</a></li>
						<?php if (isset($_SESSION['token'])) { ?>
							<li><a href="../admin/">Account</a></li>
						<?php } else { ?>
							<li><a href="../auth/">Signup</a></li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</nav>
</header>

<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
  <title>LMS - home</title>
  <?php include('./theme/head.php'); ?>
</head>

<body>
  <?php include('./theme/header.php'); ?>

  <!-- ================ start banner Area ================= -->
  <section class="home-banner-area">
    <div class="container">
      <div class="row justify-content-center fullscreen align-items-center">
        <div class="col-lg-5 col-md-8 home-banner-left">
          <h1 class="text-white">
            Take the first step <br />
            to learn with us
          </h1>
          <p class="mx-auto text-white  mt-20 mb-40">
            In the history of modern astronomy, there is probably no one
            greater leap forward than the building and launch of the space
            telescope known as the Hubble.
          </p>
        </div>
        <div class="offset-lg-2 col-lg-5 col-md-12 home-banner-right">
          <img class="img-fluid" src="img/header-img.png" alt="" />
        </div>
      </div>
    </div>
  </section>
  <!-- ================ End banner Area ================= -->

  <!-- ================ Start Feature Area ================= -->
  <section class="feature-area">
    <div class="container" style="margin-top: 21px;">
      <div class="row">
        <div class="col-md-4">
          <div class="feature-item d-flex card" style="padding: 21px;">
            <div class="ml-20">
              <h4>New Classes</h4>
              <p>
                In the history of modern astronomy, there is probably no one greater leap forward.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-item d-flex card" style="padding: 21px;">
            <div class="ml-20">
              <h4>Top Courses</h4>
              <p>
                In the history of modern astronomy, there is probably no one greater leap forward.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-item d-flex card" style="padding: 21px;">
            <div class="ml-20">
              <h4>Full E-Books</h4>
              <p>
                In the history of modern astronomy, there is probably no one greater leap forward.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ End Feature Area ================= -->

  <!-- ================ Start Popular Course Area ================= -->
  <section class="popular-course-area" style="margin: 18px 0 58px 0">
    <div class="container-fluid">
      <div class="row">
        <?php include('./partials/course-list.php'); ?>
      </div>
    </div>
  </section>
  <!-- ================ End Popular Course Area ================= -->

  <!-- ================ Start Registration Area ================= -->
  <section class="registration-area">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5">
          <div class="section-title text-left text-white" style="margin-top:20px">
            <h2 class="text-white">
              Watch Our Trainers <br>
              in Live Action
            </h2>
            <p>
              If you are looking at blank cassettes on the web, you may be
              very confused at the difference in price. You may see some for
              as low as $.17 each.
            </p>
          </div>
        </div>
        <div class="offset-lg-3 col-lg-4 col-md-6">
          <div class="course-form-section">
            <h3 class="text-white">Courses for Free</h3>
            <p class="text-white">It is high time for learning</p>
            <form class="course-form-area contact-page-form course-form text-right" id="myForm" action="mail.html" method="post">
              <div class="form-group col-md-12">
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" onfocus="this.placeholder = ''"
                 onblur="this.placeholder = 'Name'">
              </div>
              <div class="form-group col-md-12">
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Phone Number" onfocus="this.placeholder = ''"
                 onblur="this.placeholder = 'Phone Number'">
              </div>
              <div class="form-group col-md-12">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" onfocus="this.placeholder = ''"
                 onblur="this.placeholder = 'Email Address'">
              </div>
              <div class="col-lg-12 text-center">
                <button class="btn text-uppercase">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ End Registration Area ================= -->

  <!-- ================ Start Blog Post Area ================= -->
  <section class="blog-post-area section-gap">
    <div class="container-fluid">
      <div class="feature-inner row">
        <div class="col-lg-12">
          <div class="section-title text-left">
            <h2>
              Features That <br />
              Can Avail By Everyone
            </h2>
            <p>
              There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope.
              It’s exciting to think about setting up your own viewing station.
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single-blog-post">
            <img src="img/b1.jpg" class="img-fluid" alt="" />
            <div class="overlay"></div>
            <div class="top-text">
              <p>29th, oct, 2018</p>
              <p>121 likes</p>
              <p>05 comments</p>
            </div>
            <div class="text">
              <h4 class="text-white">Smart Kitchen Setup</h4>
              <div>
                <p>
                  Lorem ipsum dolor sit amet consec tetur adipisicing elit,
                  sed do.
                </p>
              </div>
              <a href="#" class="primary-btn">
                View Details
                <i class="fa fa-long-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt--160">
          <div class="single-blog-post">
            <img src="img/b2.jpg" class="img-fluid" alt="" />
            <div class="overlay"></div>
            <div class="top-text">
              <p>29th, oct, 2018</p>
              <p>121 likes</p>
              <p>05 comments</p>
            </div>
            <div class="text">
              <h4 class="text-white">Smart Kitchen Setup</h4>
              <div>
                <p>
                  Lorem ipsum dolor sit amet consec tetur adipisicing elit,
                  sed do.
                </p>
              </div>
              <a href="#" class="primary-btn">
                View Details
                <i class="fa fa-long-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt--260">
          <div class="single-blog-post">
            <img src="img/b3.jpg" class="img-fluid" alt="" />
            <div class="overlay"></div>
            <div class="top-text">
              <p>29th, oct, 2018</p>
              <p>121 likes</p>
              <p>05 comments</p>
            </div>
            <div class="text">
              <h4 class="text-white">Smart Kitchen Setup</h4>
              <div>
                <p>
                  Lorem ipsum dolor sit amet consec tetur adipisicing elit,
                  sed do.
                </p>
              </div>
              <a href="#" class="primary-btn">
                View Details
                <i class="fa fa-long-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ End Blog Post Area ================= -->

  <?php include('./theme/footer.php'); ?>
</body>
</html>
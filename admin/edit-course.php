<?php 
    include('./AuthAdmin.php');
    include('../Model/Course.php');
    include('../Error/Error.php');

    if ($_GET['course_id']) {
        $courseObj = new Course();
        $course = $courseObj->findCourse($_GET['course_id']);
        $course = mysqli_fetch_assoc($course);
    } else {
        header('Location: ../404.html');
    }

    $successMsg = null;
    $errorText = null;

    if ($_POST['submit']) {
        $courseId = $_GET['course_id'];
     
        $courseName = $_POST['course_name'];
        $courseShortName = $_POST['short_name'];
        $courseType = $_POST['course_type'];
        $coursePrice = $_POST['course_price'];
        $courseDiscount = $_POST['course_discount'];
        $courseDuration = $_POST['course_duration'];
        $courseObjective = $_POST['course_objective'];
        $courseEligibility = $_POST['course_eligibility'];
        $courseOutline = $_POST['course_outline'];
        $courseImage = $_POST['course_image'];

        $courseObj = new Course();
        $courseObj->upadteCourse($courseId, $courseName, $courseShortName, $courseType, $coursePrice, $courseDiscount, $courseDuration, $courseObjective, $courseEligibility, $courseOutline, $courseImage);
        
        // Error handelling
        $errorCode = isset($_SESSION['error']) ? $_SESSION['error'] : 0;
        $errorText = CodeError::hasError($errorCode);

        if ($_SESSION['success']) {
            $successMsg = 'Update successful.';
        } else {
            $successMsg = null;
        }
    } else {
        unset($_SESSION['error']);
        unset($_SESSION['success']);
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Course</title>
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
                    <?php 
                        if ($successMsg) {
                            echo '
                                <span class="alert alert-success">'.print($successMsg).'</span>
                            ';
                        }

                        if ( $errorText) {
                            echo '
                                <span class="alert alert-error">'.print($errorText).'</span>
                            ';
                        }
                    ?>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card" style="padding:20px">
                            <div class="content">
                                <h4>Edit Course</h4>
                                <form method="post" action="">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Course name</label>
                                                <input type="text" class="form-control border-input" name="course_name" value="<?php echo $course['course_name']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Short name</label>
                                                <input type="text" class="form-control border-input" name="short_name" value="<?php echo $course['course_short_name']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Course Type</label>
                                                <input type="text" class="form-control border-input" name="course_type" value="<?php echo $course['course_type']; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Course Price</label>
                                                <input type="text" class="form-control border-input" name="course_price" value="<?php echo $course['course_price']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Course Discount</label>
                                                <input type="text" class="form-control border-input" value="<?php echo $course['course_discount']; ?>"
                                                    name="course_discount">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Course Duration</label>
                                                <input type="text" class="form-control border-input" value="<?php echo $course['course_duration']; ?>"
                                                    name="course_duration">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Course objective</label>
                                                <input type="text" class="form-control border-input" value="<?php echo $course['course_objective']; ?>"
                                                    name="course_objective">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Course eligibility</label>
                                                <input type="text" class="form-control border-input" value="<?php echo $course['course_eligibility']; ?>"
                                                    name="course_eligibility">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Course outline</label>
                                                <input type="text" class="form-control border-input" value="<?php echo $course['course_outline']; ?>"
                                                    name="course_outline"> 
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Course Image</label>
                                                <input type="text" class="form-control border-input" value="<?php echo $course['course_image']; ?>"
                                                    name="course_image">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <input type="submit" value="Update Course" name="submit"
                                            class="btn btn-info btn-fill btn-wd">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </?>
                </div>
            </div>

            <?php include('./theme/footer.php'); ?>
        </div>
    </div>
</body>
</html>
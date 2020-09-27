<?php 
    include('../Model/Course.php');
    $courseObj = new Course();
    $courseObj->fetchAllCourse();
    $result = $courseObj->fetchAllCourse();
    
    while ($course = mysqli_fetch_assoc($result)) { ?>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <img style="max-width: 313px;margin: auto;" src="./img/courses/<?php printf($course['course_image']) ?>" class="course-image" />
            </div>
            <div class="card-body">
                <h2><?php printf($course['course_name']); ?></h2>
                <span>Duration: <?php printf($course['course_duration']); ?></span><br>
                <span>Price: <?php printf($course['course_price']); ?></span><br><br>
                <p class="card course-info"><?php printf($course['course_outline']); ?></p>
            </div>
            <div class="card-footer">
                <a href='./course-details.php?course=<?php printf($course['id']); ?>'>
                    <button class="btn btn-primary">View Course</button>
                </a>
            </div>
        </div>
    </div>
    <?php } ?>
<?php 
    $courseObject = new Course();
    $courses = $courseObject->fetchAllCourse();
?>
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">SL</th>
        <th scope="col">Course Name</th>
        <th scope="col">Price </th>
        <th scope="col">Duration</th>
        <th scope="col">Type</th>
        <th style="text-align: right">Actions</th>
      </tr>
    </thead>
    <tbody>
    <?php  while ($course = mysqli_fetch_assoc($courses)) { ?>
      <tr>
        <th><?php print($course['id'].'.'); ?></th>
        <td><?php print($course['course_name']); ?></td>
        <td><?php print($course['course_price']); ?></td>
        <td><?php print($course['course_duration']); ?></td>
        <td><?php print($course['course_type']); ?></td>
        <td style="text-align: right">
            <a href="./edit-course.php?course_id=<?php echo$course['id'] ?>">
              <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
            </a>
            <a href="./course-list.php?course_id=<?php echo $course['id']; ?>"> 
              <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
            </a>
        </td>
      </tr>
    </tbody>
    <?php } ?>
</table>

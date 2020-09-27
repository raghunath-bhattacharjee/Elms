<?php
include('../Database.php');

class Course
{
    function __construct()
    {
        $this->database = Database::getInstance();
    }

    public function fetchAllCourse()
    {
        $query = "SELECT * FROM courses";
        $result =  $this->database->connection()->query($query);
        return $result;
    }

    public function findCourse($courseId)
    {
        $query = "SELECT * FROM courses where `id` = '$courseId'";
        $result =  $this->database->connection()->query($query);
        return $result;
    }

    public function saveCourse($courseName, $courseShortName, $courseType, $coursePrice, $courseDiscount, $courseDuration, $courseObjective, $courseEligibility, $courseOutline, $courseImage)
    {
        $Query = "INSERT INTO courses (`course_name`,`course_short_name`,`course_type`,`course_price`,`course_discount`,`course_duration`,`course_objective`,`course_eligibility`,`course_outline`,`course_image`) VALUES ('$courseName', '$courseShortName', '$courseType', '$coursePrice', '$courseDiscount', '$courseDuration', '$courseObjective', '$courseEligibility', '$courseOutline', '$courseImage')";
        $result = $this->database->connection()->query($Query);

        if ($result) { //if data inserted successfully
            $_SESSION['success'] = true;
        } else {
            $_SESSION['error'] = CodeError::INVALID_COURSE_INFO;
            return true;
        }
    }

    public function upadteCourse($courseId, $courseName, $courseShortName, $courseType, $coursePrice, $courseDiscount, $courseDuration, $courseObjective, $courseEligibility, $courseOutline, $courseImage)
    {
        $Query = "UPDATE courses SET `course_name` = '$courseName',`course_short_name` = '$courseShortName',`course_type` = '$courseType',`course_price` = '$coursePrice',`course_discount` = '$courseDiscount',`course_duration` = '$courseDuration',`course_objective` = '$courseObjective',`course_eligibility` = '$courseEligibility',`course_outline` = '$courseOutline',`course_image` = '$courseImage' WHERE `id` = '$courseId'";
        $result = $this->database->connection()->query($Query);

        if ($result) { //if data inserted successfully
            $_SESSION['success'] = true;
            header('location: ../admin/edit-course.php?course_id='.$courseId);
        } else {
            $_SESSION['error'] = CodeError::INVALID_COURSE_INFO;
            return true;
        }
    }
    public function deleteCourse($courseId)
    {
        $query = "DELETE from courses WHERE `id` = '$courseId'";
        $result =  $this->database->connection()->query($query);
        return $result;
    }
}

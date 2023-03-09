<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'hwhelp');

if(isset($_POST['addButton']))
{
    $course_id = $_POST['course_id'];
    $uni_id = $_POST['uni_id'];
    $course_name = $_POST['course_name'];
    $uni_name = $_POST['uni_name'];
    $id = $_POST['id'];
    $hw_id = $_POST['hw_id'];
    
    $query = "INSERT INTO `homework` (`id`, `courseid`, `UniversityID`, `Homeworkdimg`, `HomeworkId`, `Homeworkdocuments`, `hwtittle`, `homeworkdescription`, `vedioid`) VALUES  ('$course_id','$uni_id', ' $course_name','$uni_name','$id',NULL)";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: add_course.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>
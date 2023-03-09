<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'hwhelp');

    if(isset($_POST['editbtn']))
    {   
        
        $course_id = $_POST['course_id'];
        $uni_id = $_POST['uni_id'];
        $course_name = $_POST['course_name'];
        $uni_name = $_POST['uni_name'];
        $id = $_POST['id'];
        $hw_id = $_POST['update_hw_id'];
        // INSERT INTO `lecture` (`id`, `courseid`, `UniversityID`, `lecdimg`, `lecId`, `lecdocuments`, `lectittle`, `lecdescription`) VALUES 
        $query = "UPDATE `courses` SET courseid ='$course_id', UniversityID='$uni_id', coursename='$course_name', universityname='$uni_name', id='$id' WHERE HomeworkId='$hw_id' ";

        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:add_course.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>
<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'hwhelp');

    if(isset($_POST['editbtn']))
    {   
        
        $course_id = $_POST['course_id'];
        $uni_id = $_POST['uni_id'];
        $hw_img = $_POST['hw_img'];
        $hw_id = $_POST['hw_id'];
        $hw_doc = $_POST['hw_doc'];
        $hw_title = $_POST['hw_title'];
        $hw_desc = $_POST['hw_desc'];
        $video_id = $_POST['video_id'];
        $id = $_POST['updated_id'];


        $query = "UPDATE `homework` SET  `courseid` = '$course_id', `UniversityID` = '$uni_id', `Homeworkdimg` = ' $hw_img', `HomeworkId` = ' $hw_id', `Homeworkdocuments` = '$hw_doc', `hwtittle` = '$hw_title', `homeworkdescription` = '$hw_desc', `vedioid` = '$video_id' WHERE `id` = '$id'";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:add_hw.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>


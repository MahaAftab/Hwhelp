<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'hwhelp');

    if(isset($_POST['editbtn']))
    {   
        
        $id = $_POST['update_id'];
        $uni_id = $_POST['uni_id'];
        $uni_name = $_POST['uni_name'];

        $query = "UPDATE `university` SET UniversityID ='$uni_id', Universityname='$uni_name' WHERE id='$id' ";

        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:add_uni.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>
<?php
if(isset($_POST['add_course']))
{
   
    $course_code = mysqli_real_escape_string($con,$_POST['course_code']);
    $course_name = mysqli_real_escape_string($con,$_POST['course_name']);
    $course_semester_id = mysqli_real_escape_string($con,$_POST['course_semester_id']);
    $course_level_id = mysqli_real_escape_string($con,$_POST['course_level_id']);
   
    $check_course = mysqli_query($con, "SELECT * from course where course_code = '$course_code'");
                $check_rows = mysqli_num_rows($check_course);
    if($check_rows > 0)
                {
                  echo '<div style="position:center; color:red;"><center>Course Code Already Exist!</center></div>';
                  
                }
    else{
                $query = mysqli_query($con,"INSERT INTO course (course_code,course_name,course_semester_id,course_level_id) 
        values ('$course_code','$course_name','$course_semester_id','$course_level_id')") or die('Error: ' . mysqli_error($con));
    if($query == true)
    {
        $_SESSION['added'] = 1;
        header ("location: ".$_SERVER['REQUEST_URI']);
    }   

              
               }

   
}
if(isset($_POST['save_course']))
{
    $txt_id = $_POST['hidden_id'];
    $course_code = mysqli_real_escape_string($con,$_POST['course_code']);
    $course_name = mysqli_real_escape_string($con,$_POST['course_name']);
    $course_semester_id = mysqli_real_escape_string($con,$_POST['course_semester_id']);
    $course_level_id = mysqli_real_escape_string($con,$_POST['course_level_id']);
    
    $update_query = mysqli_query($con,"Update course set course_code = '".$course_code."',course_name = '".$course_name."',course_semester_id = '".$course_semester_id."',course_level_id = '".$course_level_id."' where course_id = '".$txt_id."' ") or die('Error: ' . mysqli_error($con));

    if($update_query == true){
        $_SESSION['notif'] = 1;
        header("location: ".$_SERVER['REQUEST_URI']);
    }
}

if(isset($_POST['btn_delete']))
{
    if(isset($_POST['chk_delete']))
    {
        foreach($_POST['chk_delete'] as $value)
        {
            $delete_query = mysqli_query($con,"DELETE from course where course_id = '$value' ") or die('Error: ' . mysqli_error($con));       
            if($delete_query == true)
            {
                $_SESSION['delete'] = 1;
                header("location: ".$_SERVER['REQUEST_URI']);
            }
        }
    }
}


?>
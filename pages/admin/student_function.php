<?php
if(isset($_POST['add_student']))
    { 
            $student_matricnumber = mysqli_real_escape_string($con,$_POST['student_matricnumber']);
            $student_lname = mysqli_real_escape_string($con,$_POST['student_lname']);
            $student_othername = mysqli_real_escape_string($con,$_POST['student_othername']);
            $student_level_id = mysqli_real_escape_string($con,$_POST['student_level_id']);
            $student_program_id = mysqli_real_escape_string($con,$_POST['student_program_id']);
            $student_password = mysqli_real_escape_string($con,$_POST['student_password']);
            $cstudent_password = mysqli_real_escape_string($con,$_POST['cstudent_password']);

            if($student_password != $cstudent_password)
                {
                  echo '<div style="position:center; color:red;"><center>The Two Passwords Does Not Match!</center></div>';
                  
                }
                else{
               
            $student = mysqli_query($con, "SELECT * from student where student_matricnumber = '$student_matricnumber'");
                $numrow2 = mysqli_num_rows($student);
             
             if($numrow2 > 0)
                {
                  echo '<div style="position:center; color:red;"><center>Student Account Already exist</center></div>';
                  
                }
                else{
               
              $query = mysqli_query($con,"INSERT INTO student (student_matricnumber,student_lname,student_othername,student_level_id,student_program_id,student_password) values ('$student_matricnumber', '$student_lname', '$student_othername', '$student_level_id', '$student_program_id', '$student_password') ");
                if($query == true)
    {
        $_SESSION['added'] = 1;
        header ("location: ".$_SERVER['REQUEST_URI']);
    }   
            }

          }
             
        }

if(isset($_POST['save_student']))
{
    $txt_id = $_POST['hidden_id'];
   $student_matricnumber = mysqli_real_escape_string($con,$_POST['student_matricnumber']);
            $student_lname = mysqli_real_escape_string($con,$_POST['student_lname']);
            $student_othername = mysqli_real_escape_string($con,$_POST['student_othername']);
            $student_level_id = mysqli_real_escape_string($con,$_POST['student_level_id']);
            $student_program_id = mysqli_real_escape_string($con,$_POST['student_program_id']);
            $student_password = mysqli_real_escape_string($con,$_POST['student_password']);
            $cstudent_password = mysqli_real_escape_string($con,$_POST['cstudent_password']);

            if($student_password != $cstudent_password)
                {
                  echo '<div style="position:center; color:red;"><center>The Two Passwords Doese Not Match!</center></div>';
                  
                }
                else{
    $update_query = mysqli_query($con,"Update student set student_matricnumber = '".$student_matricnumber."',student_lname = '".$student_lname."',student_othername = '".$student_othername."',student_level_id = '".$student_level_id."',student_program_id = '".$student_program_id."',student_password = '".$student_password."' where student_id = '".$txt_id."' ") or die('Error: ' . mysqli_error($con));

    if($update_query == true){
        $_SESSION['notif'] = 1;
        header("location: ".$_SERVER['REQUEST_URI']);
    }
}
}

if(isset($_POST['btn_delete']))
{
    if(isset($_POST['chk_delete']))
    {
        foreach($_POST['chk_delete'] as $value)
        {
            $delete_query = mysqli_query($con,"DELETE from student where student_id = '$value' ") or die('Error: ' . mysqli_error($con));       
            if($delete_query == true)
            {
                $_SESSION['delete'] = 1;
                header("location: ".$_SERVER['REQUEST_URI']);
            }
        }
    }
}


?>
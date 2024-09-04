<?php
if(isset($_POST['add_semester']))
{
   
    $semester_name = mysqli_real_escape_string($con,$_POST['semester_name']);
   
    $check_semester = mysqli_query($con, "SELECT * from semester where semester_name = '$semester_name'");
                $check_rows = mysqli_num_rows($check_semester);
    if($check_rows > 0)
                {
                  echo '<div style="position:center; color:red;"><center>Semester Name Already Exist!</center></div>';
                  
                }
    else{
                $query = mysqli_query($con,"INSERT INTO semester (semester_name) 
        values ('$semester_name')") or die('Error: ' . mysqli_error($con));
    if($query == true)
    {
        $_SESSION['added'] = 1;
        header ("location: ".$_SERVER['REQUEST_URI']);
    }   

              
               }

   
}
if(isset($_POST['save_semester']))
{
    $txt_id = $_POST['hidden_id'];
    $semester_name = mysqli_real_escape_string($con,$_POST['semester_name']);
    
    $update_query = mysqli_query($con,"Update semester set semester_name = '".$semester_name."' where semester_id = '".$txt_id."' ") or die('Error: ' . mysqli_error($con));

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
            $delete_query = mysqli_query($con,"DELETE from semester where semester_id = '$value' ") or die('Error: ' . mysqli_error($con));       
            if($delete_query == true)
            {
                $_SESSION['delete'] = 1;
                header("location: ".$_SERVER['REQUEST_URI']);
            }
        }
    }
}


?>
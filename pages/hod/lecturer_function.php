<?php
if(isset($_POST['add_lecturer']))
{
   
    $lecturer_lname = mysqli_real_escape_string($con,$_POST['lecturer_lname']);
    $lecturer_othername = mysqli_real_escape_string($con,$_POST['lecturer_othername']);
    $lecturer_password = "lecturer@password";
   
    $check_lecturer = mysqli_query($con, "SELECT * from lecturer where lecturer_lname = '$lecturer_lname' and lecturer_othername = '$lecturer_othername'");
                $check_rows = mysqli_num_rows($check_lecturer);
    if($check_rows > 0)
                {
                  echo '<div style="position:center; color:red;"><center>Lecturer Name Already Exist!</center></div>';
                  
                }
    else{
                $query = mysqli_query($con,"INSERT INTO lecturer (lecturer_lname,lecturer_othername,lecturer_password) 
        values ('$lecturer_lname','$lecturer_othername','$lecturer_password')") or die('Error: ' . mysqli_error($con));
    if($query == true)
    {
        $_SESSION['added'] = 1;
        header ("location: ".$_SERVER['REQUEST_URI']);
    }   

              
               }

   
}
if(isset($_POST['save_lecturer']))
{
    $txt_id = $_POST['hidden_id'];
    $lecturer_lname = mysqli_real_escape_string($con,$_POST['lecturer_lname']);
    $lecturer_othername = mysqli_real_escape_string($con,$_POST['lecturer_othername']);
    $lecturer_password = mysqli_real_escape_string($con,$_POST['lecturer_password']);
    
    $update_query = mysqli_query($con,"Update lecturer set lecturer_lname = '".$lecturer_lname."',lecturer_othername = '".$lecturer_othername."' ,lecturer_password = '".$lecturer_password."' where lecturer_id = '".$txt_id."' ") or die('Error: ' . mysqli_error($con));

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
            $delete_query = mysqli_query($con,"DELETE from lecturer where lecturer_id = '$value' ") or die('Error: ' . mysqli_error($con));       
            if($delete_query == true)
            {
                $_SESSION['delete'] = 1;
                header("location: ".$_SERVER['REQUEST_URI']);
            }
        }
    }
}


?>
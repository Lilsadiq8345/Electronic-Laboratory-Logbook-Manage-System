<?php
if(isset($_POST['add_hod']))
{
   
    $hod_lnames = mysqli_real_escape_string($con,$_POST['hod_lname']);
    $hod_othername = mysqli_real_escape_string($con,$_POST['hod_othername']);
    $hod_password = "hod@password";
    $hod_lname = strtoupper($hod_lnames);
   
    $check_hod = mysqli_query($con, "SELECT * from hod where hod_lname = '$hod_lname' and hod_othername = '$hod_othername'");
                $check_rows = mysqli_num_rows($check_hod);
    if($check_rows > 0)
                {
                  echo '<div style="position:center; color:red;"><center>HOD Name Already Exist!</center></div>';
                  
                }
    else{
                $query = mysqli_query($con,"INSERT INTO hod (hod_lname,hod_othername,hod_password) 
        values ('$hod_lname','$hod_othername','$hod_password')") or die('Error: ' . mysqli_error($con));
    if($query == true)
    {
        $_SESSION['added'] = 1;
        header ("location: ".$_SERVER['REQUEST_URI']);
    }   

              
               }

   
}
if(isset($_POST['save_hod']))
{
    $txt_id = $_POST['hidden_id'];
    $hod_lname = mysqli_real_escape_string($con,$_POST['hod_lname']);
    $hod_othername = mysqli_real_escape_string($con,$_POST['hod_othername']);
    $hod_password = mysqli_real_escape_string($con,$_POST['hod_password']);
    
    $update_query = mysqli_query($con,"Update hod set hod_lname = '".$hod_lname."',hod_othername = '".$hod_othername."',hod_password = '".$hod_password."' where hod_id = '".$txt_id."' ") or die('Error: ' . mysqli_error($con));

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
            $delete_query = mysqli_query($con,"DELETE from hod where hod_id = '$value' ") or die('Error: ' . mysqli_error($con));       
            if($delete_query == true)
            {
                $_SESSION['delete'] = 1;
                header("location: ".$_SERVER['REQUEST_URI']);
            }
        }
    }
}


?>
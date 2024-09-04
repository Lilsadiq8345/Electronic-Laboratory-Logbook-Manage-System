<?php
if(isset($_POST['register']))
{
   
    $registration_uid = $_SESSION['userid'];
    $registration_cid = mysqli_real_escape_string($con,$_POST['registration_cid']);
   
    $check_registration = mysqli_query($con, "SELECT * from course_registration where registration_uid = '$registration_uid' and registration_cid = '$registration_cid'");
                $check_rows = mysqli_num_rows($check_registration);
    if($check_rows > 0)
                {
                  echo '<div style="position:center; color:red;"><center>Course Already Regitered!</center></div>';
                  
                }
    else{
                $query = mysqli_query($con,"INSERT INTO course_registration (registration_uid,registration_cid) 
        values ('$registration_uid','$registration_cid')") or die('Error: ' . mysqli_error($con));
    if($query == true)
    {
        $_SESSION['added'] = 1;
        header ("location: ".$_SERVER['REQUEST_URI']);
    }   

              
               }

   
}

if(isset($_POST['submit_report']))
{
    $report_uid = $_SESSION['userid'];
    $report_cid = mysqli_real_escape_string($con,$_POST['hidden_id']);
    $report_topic = mysqli_real_escape_string($con,$_POST['report_topic']);
    $report_labnumber = mysqli_real_escape_string($con,$_POST['report_labnumber']);
    $report_aims = mysqli_real_escape_string($con,$_POST['report_aims']);
    $report_date = mysqli_real_escape_string($con,$_POST['report_date']);
    $report_venue = mysqli_real_escape_string($con,$_POST['report_venue']);
    $report_material = mysqli_real_escape_string($con,$_POST['report_material']);
    $report_description = mysqli_real_escape_string($con,$_POST['report_description']);
    $product_image1 = $_FILES["productimage1"]["name"];

  

   $randomNumber = rand(100000000000, 999999999999);
   $randomNumber2 = rand(100000000000, 999999999999);
   $randomStrings = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 30);
   $randomStrings2 = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 30);
   $randomString = $randomNumber.$randomStrings.$randomNumber2.$randomStrings2;
   $uploadedFileName1 = $randomString . '_' . $product_image1;
   
    $check = mysqli_query($con,"select * from report where report_cid = '$report_cid' and report_uid = '$report_uid' ");
   $numrow = mysqli_num_rows($check);

   if ($numrow > 0 ) {
     echo '<div style="position:center; color:red;"><center>Report Already submitted!</center></div>';
   }
   else{
     move_uploaded_file($_FILES["productimage1"]["tmp_name"],"files/".$uploadedFileName1);
                $query = mysqli_query($con,"INSERT INTO report (report_venue,report_uid,report_cid,report_topic,report_labnumber,report_aims,report_date,report_material,report_description,report_attachment) 
        values ('$report_venue','$report_uid','$report_cid','$report_topic','$report_labnumber','$report_aims','$report_date','$report_material','$report_description','$uploadedFileName1')") or die('Error: ' . mysqli_error($con));
    if($query == true)
    {
        $_SESSION['added'] = 1;
        header ("location: ".$_SERVER['REQUEST_URI']);
    }   

              
               }

  } 


if(isset($_POST['btn_delete']))
{
    if(isset($_POST['chk_delete']))
    {
        foreach($_POST['chk_delete'] as $value)
        {
            $delete_query = mysqli_query($con,"DELETE from course_registration where registration_id = '$value' ") or die('Error: ' . mysqli_error($con));       
            if($delete_query == true)
            {
                $_SESSION['delete'] = 1;
                header("location: ".$_SERVER['REQUEST_URI']);
            }
        }
    }
}


?>
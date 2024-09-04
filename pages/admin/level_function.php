<?php
if(isset($_POST['add_level']))
{
   
    $level_name = mysqli_real_escape_string($con,$_POST['level_name']);
   
    $check_level = mysqli_query($con, "SELECT * from level where level_name = '$semester_name'");
                $check_rows = mysqli_num_rows($check_level);
    if($check_rows > 0)
                {
                  echo '<div style="position:center; color:red;"><center>Level Name Already Exist!</center></div>';
                  
                }
    else{
                $query = mysqli_query($con,"INSERT INTO level (level_name) 
        values ('$level_name')") or die('Error: ' . mysqli_error($con));
    if($query == true)
    {
        $_SESSION['added'] = 1;
        header ("location: ".$_SERVER['REQUEST_URI']);
    }   

              
               }

   
}
if(isset($_POST['save_level']))
{
    $txt_id = $_POST['hidden_id'];
    $level_name = mysqli_real_escape_string($con,$_POST['level_name']);
    
    $update_query = mysqli_query($con,"Update level set level_name = '".$level_name."' where level_id = '".$txt_id."' ") or die('Error: ' . mysqli_error($con));

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
            $delete_query = mysqli_query($con,"DELETE from level where level_id = '$value' ") or die('Error: ' . mysqli_error($con));       
            if($delete_query == true)
            {
                $_SESSION['delete'] = 1;
                header("location: ".$_SERVER['REQUEST_URI']);
            }
        }
    }
}


?>
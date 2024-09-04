<?php
if(isset($_POST['add_program']))
{
   
    $program_name = mysqli_real_escape_string($con,$_POST['program_name']);
   
    $check_program = mysqli_query($con, "SELECT * from program where program_name = '$program_name'");
                $check_rows = mysqli_num_rows($check_program);
    if($check_rows > 0)
                {
                  echo '<div style="position:center; color:red;"><center>Program Name Already Exist!</center></div>';
                  
                }
    else{
                $query = mysqli_query($con,"INSERT INTO program (program_name) 
        values ('$program_name')") or die('Error: ' . mysqli_error($con));
    if($query == true)
    {
        $_SESSION['added'] = 1;
        header ("location: ".$_SERVER['REQUEST_URI']);
    }   

              
               }

   
}
if(isset($_POST['save_program']))
{
    $txt_id = $_POST['hidden_id'];
    $program_name = mysqli_real_escape_string($con,$_POST['program_name']);
    
    $update_query = mysqli_query($con,"Update program set program_name = '".$program_name."' where program_id = '".$txt_id."' ") or die('Error: ' . mysqli_error($con));

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
            $delete_query = mysqli_query($con,"DELETE from program where program_id = '$value' ") or die('Error: ' . mysqli_error($con));       
            if($delete_query == true)
            {
                $_SESSION['delete'] = 1;
                header("location: ".$_SERVER['REQUEST_URI']);
            }
        }
    }
}


?>
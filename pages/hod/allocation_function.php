<?php
if(isset($_POST['add_allocation']))
{
   
    $allocation_lid = mysqli_real_escape_string($con,$_POST['allocation_lid']);
    $allocation_cid = mysqli_real_escape_string($con,$_POST['allocation_cid']);
   
    $check_allocation = mysqli_query($con, "SELECT * from allocation where allocation_cid = '$allocation_cid'");
                $check_rows = mysqli_num_rows($check_allocation);
    if($check_rows > 0)
                {
                  echo '<div style="position:center; color:red;"><center>Course Already Allocated to another lecturer!</center></div>';
                  
                }
    else{
                $query = mysqli_query($con,"INSERT INTO allocation (allocation_lid,allocation_cid) 
        values ('$allocation_lid','$allocation_cid')") or die('Error: ' . mysqli_error($con));
    if($query == true)
    {
        $_SESSION['added'] = 1;
        header ("location: ".$_SERVER['REQUEST_URI']);
    }   

              
               }

   
}
if(isset($_POST['save_allocation']))
{
    $txt_id = $_POST['hidden_id'];
    $allocation_lid = mysqli_real_escape_string($con,$_POST['allocation_lid']);
    $allocation_cid = mysqli_real_escape_string($con,$_POST['allocation_cid']);
    
    $update_query = mysqli_query($con,"Update allocation set allocation_lid = '".$allocation_lid."',allocation_cid = '".$allocation_cid."' where allocation_id = '".$txt_id."' ") or die('Error: ' . mysqli_error($con));

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
            $delete_query = mysqli_query($con,"DELETE from allocation where allocation_id = '$value' ") or die('Error: ' . mysqli_error($con));       
            if($delete_query == true)
            {
                $_SESSION['delete'] = 1;
                header("location: ".$_SERVER['REQUEST_URI']);
            }
        }
    }
}


?>
<?php
if(isset($_POST['grade_']))
{
    $txt_id = $_POST['hidden_id'];
    $grade = mysqli_real_escape_string($con,$_POST['grade']);
    
    
    $update_query = mysqli_query($con,"Update report set report_mark = '".$grade."',report_sta = '1' where report_id = '".$txt_id."' ") or die('Error: ' . mysqli_error($con));

    if($update_query == true){
        header("location: ".$_SERVER['REQUEST_URI']);
    }
}




?>
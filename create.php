<!DOCTYPE html>
<html>
<?php
session_start();
include 'pages/connection.php';
?>
    <head>
        <meta charset="UTF-8">
        <title>create Account || Student</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />

    </head>
    <body class="skin-black" >
        <div class="container" style="margin-top:30px">
          <div class="col-md-4 col-md-offset-4">
              <div class="panel panel-default">
            <div class="panel-heading"><h3 class="panel-title"><strong>Student Registration</strong></h3></div>
            <div class="panel-body">
              <form role="form" method="post">
                <div class="form-group">
                  <label for="txt_username">Matric Number</label>
                  <input type="text" class="form-control" style="border-radius:0px" name="student_matricnumber"  required>
                </div>
                 <div class="form-group">
                  <label for="txt_username">Last Name</label>
                  <input type="text" class="form-control" style="border-radius:0px" name="student_lname"  required>
                </div>
                 <div class="form-group">
                  <label for="txt_username">Other Names</label>
                  <input type="text" class="form-control" style="border-radius:0px" name="student_othername"  required>
                </div>
                 <div class="form-group">
                  <label for="txt_username">Level</label>
                  <select class="form-control" style="border-radius:0px" name="student_level_id"  required>
                    <option value="">--select--</option>
                     <?php
                                  $levelquery = mysqli_query($con, "SELECT * FROM level ");
                                  while($levelrow = mysqli_fetch_array($levelquery))
                                            {?>
                                <option value="<?php echo $levelrow['level_id']; ?>"><?php echo $levelrow['level_name']; ?></option> 
                                        <?php } ?>
                  </select>
                  
                </div>
                <div class="form-group">
                  <label for="txt_username">Program</label>
                  <select class="form-control" style="border-radius:0px" name="student_program_id"  required>
                    <option value="">--select--</option>
                     <?php
                                  $programquery = mysqli_query($con, "SELECT * FROM program ");
                                  while($programrow = mysqli_fetch_array($programquery))
                                            {?>
                                            <option value="<?php echo $programrow['program_id']; ?>"><?php echo $programrow['program_name']; ?></option> 
                                        <?php } ?>
                  </select>
                  
                </div>
                 <div class="form-group">
                  <label for="txt_username">Password</label>
                  <input type="password" class="form-control" style="border-radius:0px" name="student_password" required>
                </div>
                <div class="form-group">
                  <label for="txt_username">Confirm Password</label>
                  <input type="password" class="form-control" style="border-radius:0px" name="cstudent_password"  required>
                </div>

                
                <div class="form-group">
                  <a href="index.php">Already have an Account? login </a>
                  
                </div>
                <button type="submit" class="btn btn-sm btn-primary" name="btn_create">Register</button>
              </form>
            </div>
          </div>
          </div>
        </div>

      <?php
        
        if(isset($_POST['btn_create']))
        { 
            $student_matricnumbers = mysqli_real_escape_string($con,$_POST['student_matricnumber']);
            $student_lname = mysqli_real_escape_string($con,$_POST['student_lname']);
            $student_othername = mysqli_real_escape_string($con,$_POST['student_othername']);
            $student_level_id = mysqli_real_escape_string($con,$_POST['student_level_id']);
            $student_program_id = mysqli_real_escape_string($con,$_POST['student_program_id']);
            $student_password = mysqli_real_escape_string($con,$_POST['student_password']);
            $cstudent_password = mysqli_real_escape_string($con,$_POST['cstudent_password']);
            $student_matricnumber = strtoupper($student_matricnumbers);

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
               
               mysqli_query($con,"INSERT INTO student (student_matricnumber,student_lname,student_othername,student_level_id,student_program_id,student_password) values ('$student_matricnumber', '$student_lname', '$student_othername', '$student_level_id', '$student_program_id', '$student_password') ");
               echo ("<script>alert('Registration Success!');
               window.location.href='index.php';</script>");
               
            }

          }
             
        }
        
      ?>

    </body>
</html>
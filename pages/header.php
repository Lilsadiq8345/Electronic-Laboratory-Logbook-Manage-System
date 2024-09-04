  <?php
  session_start();
            ob_start();
if (empty($_SESSION['userid'])) {
   echo "
    <script>
  
   window.location.href='../../index.php';
   </script>";
}
   echo  '<header class="header">
            <a href="#" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                E-Logbook System
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">

                    <ul class="nav navbar-nav">
                    <div id="google_translate_element"></div>

                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>';

                                if($_SESSION['role'] == "Administrator"){
                                    $user = mysqli_query($con,"SELECT * from admin where admin_id = '".$_SESSION['userid']."' ");
                                    while($row = mysqli_fetch_array($user)){
                                        $_SESSION['user'] = 'Administrator';
                                        echo'<span>Administrator<i class="caret"></i></span>';
                                    }
                                }
                                elseif($_SESSION['role'] == "HOD"){
                                    $user = mysqli_query($con,"SELECT * from hod where hod_id = '".$_SESSION['userid']."' ");
                                    while($row = mysqli_fetch_array($user)){
                                        $_SESSION['user'] = $row['hod_lname'].' '.$row['hod_othername'];
                                        echo'<span>'.$row['hod_lname'].' '.$row['hod_othername'].'<i class="caret"></i></span>';
                                    }
                                }
                                elseif($_SESSION['role'] == "Student"){
                                    $user = mysqli_query($con,"SELECT * from student where student_id = '".$_SESSION['userid']."' ");
                                    while($row = mysqli_fetch_array($user)){
                                        $_SESSION['user'] = $row['student_matricnumber'];
                                        echo'<span>'.$row['student_matricnumber'].'<i class="caret"></i></span>';
                                    }
                                }
                                 elseif($_SESSION['role'] == "Lecturer"){
                                    $user = mysqli_query($con,"SELECT * from lecturer where lecturer_id = '".$_SESSION['userid']."' ");
                                    while($row = mysqli_fetch_array($user)){
                                        $_SESSION['user'] = $row['lecturer_lname'].' '.$row['lecturer_othername'];
                                        echo'<span>'.$row['lecturer_lname'].' '.$row['lecturer_othername'].'<i class="caret"></i></span>';
                                    }
                                }

                            echo '</a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    
                                    <p>
                                        '.$_SESSION['user'].'
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat" data-toggle="modal" data-target="#editProfileModal">Change Password</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="../../logout.php" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>'; ?>


         <div id="editProfileModal" class="modal fade">
            <form method="post">
              <div class="modal-dialog modal-sm" style="width:300px !important;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Change Password</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                        <?php
                        
                        if($_SESSION['role'] == "Patient"){
                            $user = mysqli_query($con,"SELECT * from tbl_patient where patient_id = '".$_SESSION['userid']."' ");
                            while($row = mysqli_fetch_array($user)){
                                echo '
                                    
                                    <div class="form-group">
                                        <label>Password:</label>
                                        <input name="txt_password" id="txt_password" class="form-control input-sm" type="password"  value="'.$row['patient_password'].'"/>
                                    </div>
                                    ';
                            } 
                        }
                        elseif($_SESSION['role'] == "Administrator"){
                            $user = mysqli_query($con,"SELECT * from admin where admin_id = '".$_SESSION['userid']."' ");
                            while($row = mysqli_fetch_array($user)){
                                echo '
                                   
                                    <div class="form-group">
                                        <label>New Password:</label>
                                        <input name="txt_password" id="txt_password" class="form-control input-sm" type="password"  "/>
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm Password:</label>
                                        <input name="txt_cpassword" id="txt_password" class="form-control input-sm" type="password" />
                                    </div>
                                   ';
                                    
                                    
                            } 
                        }
                        elseif($_SESSION['role'] == "HOD"){
                            $user = mysqli_query($con,"SELECT * from hod where hod_id = '".$_SESSION['userid']."' ");
                            while($row = mysqli_fetch_array($user)){
                                echo '
                                   
                                    <div class="form-group">
                                        <label>Password:</label>
                                        <input name="txt_password" id="txt_password" class="form-control input-sm" type="text"  "/>
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm Password:</label>
                                        <input name="txt_cpassword" id="txt_password" class="form-control input-sm" type="text" />
                                    </div>
                                   ';
                                    
                                    
                            } 
                        }
                        elseif($_SESSION['role'] == "Student"){
                            $user = mysqli_query($con,"SELECT * from student where student_id = '".$_SESSION['userid']."' ");
                            while($row = mysqli_fetch_array($user)){
                                echo '
                                   
                                    <div class="form-group">
                                        <label>New Password:</label>
                                        <input name="txt_password" id="txt_password" class="form-control input-sm" type="password"  "/>
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm Password:</label>
                                        <input name="txt_cpassword" id="txt_password" class="form-control input-sm" type="password" />
                                    </div>
                                   ';
                                    
                                    
                            } 
                        }
                        elseif($_SESSION['role'] == "Lecturer"){
                            $user = mysqli_query($con,"SELECT * from lecturer where lecturer_id = '".$_SESSION['userid']."' ");
                            while($row = mysqli_fetch_array($user)){
                                echo '
                                   
                                    <div class="form-group">
                                        <label>New Password:</label>
                                        <input name="txt_password" id="txt_password" class="form-control input-sm" type="password"  "/>
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm Password:</label>
                                        <input name="txt_cpassword" id="txt_password" class="form-control input-sm" type="password" />
                                    </div>
                                   ';
                                    
                                    
                            } 
                        }
                        ?>
                         
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
                        <input type="submit" class="btn btn-primary btn-sm" id="btn_saveeditProfile" name="btn_saveeditProfile" value="Save"/>
                    </div>
                </div>
              </div>
              </form>
            </div>


            <?php
            include "duplicate_error.php";
            
                    if($_SESSION['role'] == "Administrator"){
                        if(isset($_POST['btn_saveeditProfile'])){
                        $password = $_POST['txt_password'];
                         $confirmpass = $_POST['txt_cpassword'];
                
                        if ($confirmpass == $password) {
                        $updadmin = mysqli_query($con,"UPDATE admin set  admin_password = '$password' where admin_id = '".$_SESSION['userid']."' ");
                        if($updadmin == true){
                            $_SESSION['notif'] = 1;
                            header ("location: ".$_SERVER['REQUEST_URI']);
                        }
                        }else{
                             echo ("<script>alert('The Two Passwords Not Matched!');
              </script>");
                        }
                        }
                       
                    }
                    elseif($_SESSION['role'] == "HOD"){
                        if(isset($_POST['btn_saveeditProfile'])){
                        $password = $_POST['txt_password'];
                         $confirmpass = $_POST['txt_cpassword'];
                
                        if ($confirmpass == $password) {
                        $uphod = mysqli_query($con,"UPDATE hod set  hod_password = '$password' where hod_id = '".$_SESSION['userid']."' ");
                        if($uphod == true){
                            $_SESSION['notif'] = 1;
                            header ("location: ".$_SERVER['REQUEST_URI']);
                        }
                        }else{
                             echo ("<script>alert('The Two Passwords Not Matched!');
              </script>");
                        }
                        }
                    }
                     elseif($_SESSION['role'] == "Student"){
                        if(isset($_POST['btn_saveeditProfile'])){
                        $password = $_POST['txt_password'];
                         $confirmpass = $_POST['txt_cpassword'];
                
                        if ($confirmpass == $password) {
                        $upstudent = mysqli_query($con,"UPDATE student set  student_password = '$password' where student_id = '".$_SESSION['userid']."' ");
                        if($upstudent == true){
                            $_SESSION['notif'] = 1;
                            header ("location: ".$_SERVER['REQUEST_URI']);
                        }
                        }else{
                             echo ("<script>alert('The Two Passwords Not Matched!');
              </script>");
                        }
                        }
                    }

                    elseif($_SESSION['role'] == "Lecturer"){
                        if(isset($_POST['btn_saveeditProfile'])){
                        $password = $_POST['txt_password'];
                         $confirmpass = $_POST['txt_cpassword'];
                
                        if ($confirmpass == $password) {
                        $uplec = mysqli_query($con,"UPDATE lecturer set  lecturer_password = '$password' where lecturer_id = '".$_SESSION['userid']."' ");
                        if($uplec == true){
                            $_SESSION['notif'] = 1;
                            header ("location: ".$_SERVER['REQUEST_URI']);
                        }
                        }else{
                             echo ("<script>alert('The Two Passwords Not Matched!');
              </script>");
                        }
                        }
                    }

            ?>

            <?php
             if(isset($_SESSION['notif'])){
                echo '<script>$(document).ready(function (){success();});</script>';
                unset($_SESSION['notif']);
                } ?>
            <div class="alert alert-success alert-autocloseable-success" style=" position: fixed; top: 1em; right: 1em; z-index: 9999; display: none;">
                 Saved!
            </div> 

<?php

	echo '
	<aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        
                        <div class="pull-left info">
                            <h4>Hello, ';

                                if($_SESSION['role'] == "Administrator"){
                                    $user = mysqli_query($con,"SELECT * from admin where admin_id = '".$_SESSION['userid']."' ");
                                    while($row = mysqli_fetch_array($user)){
                                        $_SESSION['user'] = $row['admin_username'];
                                        echo "Admin";
                                    }
                                }
                                elseif($_SESSION['role'] == "HOD"){
                                    $user = mysqli_query($con,"SELECT * from hod where hod_id = '".$_SESSION['userid']."' ");
                                    while($row = mysqli_fetch_array($user)){
                                        $_SESSION['user'] = $row['hod_lname'].' '.$row['hod_othername'];
                                        echo $row['hod_lname'].' '.$row['hod_othername'];
                                    }
                                }
                                elseif($_SESSION['role'] == "Student"){
                                    $user = mysqli_query($con,"SELECT * from student where student_id = '".$_SESSION['userid']."' ");
                                    while($row = mysqli_fetch_array($user)){
                                         $_SESSION['user'] = $row['student_matricnumber'];
                                        echo $row['student_matricnumber'];
                                    }
                                }
                                elseif($_SESSION['role'] == "Lecturer"){
                                    $user = mysqli_query($con,"SELECT * from lecturer where lecturer_id = '".$_SESSION['userid']."'");
                                    while($row = mysqli_fetch_array($user)){
                                         $_SESSION['user'] = $row['lecturer_lname'].' '.$row['lecturer_othername'];
                                        echo $row['lecturer_lname'].' '.$row['lecturer_othername'];
                                    }
                                }
                                echo '
                            </h4>

                        </div>
                    </div>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">';
                        if($_SESSION['role'] == "Administrator"){
                            echo '
                            <li>
                                <a href="../admin/program.php">
                                     <span>Manage Programes</span>
                                </a>
                            </li>
                             <li>
                                <a href="../admin/semester.php">
                                     <span>Manage Semesters</span>
                                </a>
                            </li>
                            <li>
                                <a href="../admin/level.php">
                                     <span>Manage Levels</span>
                                </a>
                            </li>
                            <li>
                                <a href="../admin/course.php">
                                     <span>Manage Courses</span>
                                </a>
                            </li>
                            <li>
                                <a href="../admin/student.php">
                                     <span>Manage Students</span>
                                </a>
                            </li>
                             <li>
                                <a href="../admin/lecturer.php">
                                     <span>Manage Lecturers</span>
                                </a>
                            </li>
                             <li>
                                <a href="../admin/hod.php">
                                     <span>Manage HODs</span>
                                </a>
                            </li>
                           
                            
                            
                            ';
                        }
                        elseif($_SESSION['role'] == "HOD"){
                            echo '
                             <li>
                                <a href="../hod/approval_request.php">
                                     <span>Approval Requests</span>
                                </a>
                            </li>
                             <li>
                                <a href="../hod/student.php">
                                     <span>Manage Students</span>
                                </a>
                            </li>
                             <li>
                                <a href="../hod/lecturer.php">
                                     <span>Manage Lecturers</span>
                                </a>
                            </li>
                            <li>
                                <a href="../hod/allocation.php">
                                     <span>Manage Allocations</span>
                                </a>
                            </li>
                             <li>
                                <a href="../hod/courses.php">
                                     <span>All Courses</span>
                                </a>
                            </li>
                            <li>
                                <a href="../hod/students.php">
                                     <span>All Students</span>
                                </a>
                            </li>
                            <li>
                                <a href="../hod/lecturers.php">
                                     <span>All Lecturers</span>
                                </a>
                            </li>
                            <li>
                                <a href="../hod/all_reports.php">
                                     <span>All Reports</span>
                                </a>
                            </li>
                            
                           ';
                        }
                        elseif($_SESSION['role'] == "Student"){
                            echo '
                            <li>
                            <a href="../student/course_registration.php">
                                 <span> Course Registration</span>
                            </a>
                            </li>

                             <li>
                            <a href="../student/submit.php">
                                 <span> Submit Report</span>
                            </a>
                            </li>

                             <li>
                            <a href="../student/view_report.php">
                                 <span> View Report</span>
                            </a>
                            </li>

                             <li>
                            <a href="../student/view_result.php">
                                 <span> View Result</span>
                            </a>
                            </li>
                           
                           ';
                        }
                         elseif($_SESSION['role'] == "Lecturer"){
                            echo '
                            <li>
                            <a href="../lecturer/my_course.php">
                                 <span> My Course</span>
                            </a>
                            </li>
                           <li>
                                <a href="../lecturer/all_reports.php">
                                     <span>All Reports</span>
                                </a>
                            </li>

                             <li>
                            <a href="../lecturer/m_student.php">
                                 <span> My Students</span>
                            </a>
                            </li>

                             <li>
                            <a href="../lecturer/grade_student.php">
                                 <span> Grade Student</span>
                            </a>
                            </li>
                            <li>
                            <a href="../lecturer/results.php">
                                 <span> Sudent Result</span>
                            </a>
                            </li>

                            
                           
                           ';
                        }
                        echo'
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
	';
?>
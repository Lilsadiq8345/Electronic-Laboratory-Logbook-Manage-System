<!DOCTYPE html>
<html lang="en">

<?php
session_start();
include('../head_css.php'); 
include '../connection.php';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade</title>
    <link rel="stylesheet" href="../../css/popup.css">
    <style>
        .container {
            margin-top: 50px;
        }
        .btn {
            margin-top: 10px;
        }
        .remove-btn {
            margin-left: 10px;
            cursor: pointer;
            color: red;
        }
    </style>
</head>

<body>
    <div class="container">
        <center>
            <p style="font-weight: bold; font-size: 20px;">Student Grade
        </center>
        <br><br>

        

        <form method="post">
                                    <table id="course_table" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                               
                                                <th>Matric Number</th>
                                                <th>Course Code</th>
                                                <th>Course Title</th>
                                                <th>Report Topic</th>
                                                <th>Report Marks</th>
                                                
                                               
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $squery = mysqli_query($con, "SELECT * from report inner join course on report.report_cid = course.course_id inner join allocation on course.course_id = allocation.allocation_cid inner join student on report.report_uid = student.student_id where allocation.allocation_lid= '".$_SESSION['userid']."' and report.report_sta = 1
                                                ");
                                            while($row = mysqli_fetch_array($squery))
                                            {
                                                echo '
                                                <tr>
                                                    
                                                     <td>'.$row['student_matricnumber'].'</td>
                                                    <td>'.$row['course_code'].'</td>
                                                    <td>'.$row['course_name'].'</td>
                                                    <td>'.$row['report_topic'].'</td>
                                                    <td>'.$row['report_mark'].'</td>
                                                    
                                                     
 
                                                </tr>
                                                ';
                                                
                                                
                                            }
                                            ?>
                                        </tbody>
                                    </table>

                                   

                                    </form>
           

           
          
       
    </div>

   <script>
        window.onload = function() {
        window.print();
    }
   </script>
</body>
</html>

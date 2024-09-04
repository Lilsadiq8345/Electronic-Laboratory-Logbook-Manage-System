<?php 
session_start();
include "pages/connection.php";

if (isset($_POST['btn_login'])) {
    $username = $_POST['txt_username'];
    $password = $_POST['txt_password'];

    $admin = mysqli_query($con, "SELECT * FROM admin WHERE admin_username = '$username' AND admin_password = '$password'");
    $numrow = mysqli_num_rows($admin);

    $hod = mysqli_query($con, "SELECT * FROM hod WHERE hod_lname = '$username' AND hod_password = '$password'");
    $numrow1 = mysqli_num_rows($hod);

    $student = mysqli_query($con, "SELECT * FROM student WHERE student_matricnumber = '$username' AND student_password = '$password'");
    $numrow2 = mysqli_num_rows($student);

    $lecturer = mysqli_query($con, "SELECT * FROM lecturer WHERE lecturer_lname = '$username' AND lecturer_password = '$password'");
    $numrow3 = mysqli_num_rows($lecturer);

    if ($numrow > 0) {
        while ($row = mysqli_fetch_array($admin)) {
            $_SESSION['role'] = "Administrator";
            $_SESSION['userid'] = $row['admin_id'];
        }
        echo "<script>window.location.href='pages/admin/student.php';</script>";
        exit;
    } elseif ($numrow1 > 0) {
        while ($row = mysqli_fetch_array($hod)) {
            $_SESSION['role'] = "HOD";
            $_SESSION['userid'] = $row['hod_id'];
        }
        echo "<script>window.location.href='pages/hod/approval_request.php';</script>";
        exit;
    } elseif ($numrow2 > 0) {
        while ($row = mysqli_fetch_array($student)) {
            $_SESSION['role'] = "Student";
            $_SESSION['userid'] = $row['student_id'];
        }
        echo "<script>window.location.href='pages/student/course_registration.php';</script>";
        exit;
    } elseif ($numrow3 > 0) {
        while ($row = mysqli_fetch_array($lecturer)) {
            $_SESSION['role'] = "Lecturer";
            $_SESSION['userid'] = $row['lecturer_id'];
        }
        echo "<script>window.location.href='pages/lecturer/m_student.php';</script>";
        exit;
    } else {
        echo "<script>
            alert('Invalid Account Details. Please enter correct details.');
            window.location.href='index.php';
        </script>";
        exit;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login || E-Logbook</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.0.2 -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
    <!-- Custom styles -->
    <style>
        /* Full-screen background container */
        .background-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: -1;
        }

        /* Slideshow images */
        .background-slideshow {
            display: flex;
            height: 100%;
            width: 200%;
            animation: scrollSlideshow 30s linear infinite;
        }

        .background-slideshow img {
            width: 50%;
            object-fit: cover;
        }

        @keyframes scrollSlideshow {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-50%);
            }
        }

        /* Scrolling text overlay */
        .scrolling-text {
            position: absolute;
            bottom: 20px;
            width: 100%;
            text-align: center;
            font-size: 24px;
            color: white;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 10px 0;
            animation: scrollText 15s linear infinite;
        }

        @keyframes scrollText {
            0% {
                transform: translateX(100%);
            }
            100% {
                transform: translateX(-100%);
            }
        }

        /* Centered login container */
        .login-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            max-width: 400px;
            z-index: 10;
        }

        .panel {
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }

        .panel-heading {
            text-align: center;
            background-color: #3c8dbc;
            color: #fff;
            border-radius: 10px 10px 0 0;
        }

        .btn-primary {
            background-color: #3c8dbc;
            border-color: #367fa9;
            border-radius: 0px;
        }

        .btn-primary:hover {
            background-color: #367fa9;
        }
    </style>
</head>
<body class="skin-black">
    <!-- Background container for the slideshow -->
    <div class="background-container">
        <div class="background-slideshow">
            <img src="img/1.jpg" alt="Background Image 1">
            <img src="img/2.jpg" alt="Background Image 2">
            <img src="img/3.jpg" alt="Background Image 3">
            <img src="img/file.jpg" alt="Background Image 4">
            <img src="img/4.jpg" alt="Background Image 5">
            <img src="img/5.jpg" alt="Background Image 6">
            <img src="img/6.jpg" alt="Background Image 7">
            <img src="img/blur-background08.jpg" alt="Background Image 8">
            <img src="img/blur-background09.jpg" alt="Background Image 9">
        </div>
        <div class="scrolling-text">
            <span><em>NIGER  STATE  POLYTECHNIC  ZUNGER  DEPARTMENT  OF  COMPUTER  SCIENCE  BY  LILSADIQ</em></span>
        </div>
    </div>

    <!-- Login form container -->
    <div class="login-container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><strong>Login with Your Credentials</strong></h3>
            </div>
            <div class="panel-body">
                <form id="loginForm" role="form" method="post">
                    <div class="form-group">
                        <label for="txt_username">Username</label>
                        <input type="text" class="form-control" name="txt_username" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <label for="txt_password">Password</label>
                        <input type="password" class="form-control" name="txt_password" placeholder="Enter Password" required>
                    </div>
                    <div class="form-group">
                        <a href="create.php">Create Account(Student)</a>
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary" name="btn_login">Log in</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

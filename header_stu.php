<?php
session_start();

if(!$_SESSION['roll']){
    echo "<script>alert('Please Sign IN');</script>";
    ?>
    <script>
        window.location='login.php';
    </script>
    <?php
}
$con=mysqli_connect('localhost','root','','sbsdigifunction');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Student's Portal</title>
</head>
<body>
<div class="container-fluid" style="padding-top:10px">
    <header>
        <div class="row">
        &nbsp;&nbsp;&nbsp;&nbsp;<h1>CompuWave</h1>
        </div>

        <div class="row">
            <nav class="col-lg-12">
                <ul class="nav justify-content-end header-elements-stu">
                    <li class="nav-item" style="margin-right:10px;">
                        <a class="nav-link btn btn-primary" href="events_stu.php">Events</a>
                    </li>
                    <li class="nav-item" style="margin-right:10px;">
                        <a class="nav-link btn btn-info" href="registered_events_stu.php">Registered Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-danger" href="signout.php">Sign OUT</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
</div>
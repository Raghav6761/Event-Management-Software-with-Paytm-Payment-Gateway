<?php
session_start();

if(!$_SESSION['roll']){
    // echo "<script>alert('Please Sign IN');</script>";
    ?>
    <script>
        alert('Please Sign IN');
        window.location='index.php';
    </script>
    <?php
}
$con = mysqli_connect('localhost','root','','sbsdigifunction');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Event Manager's Portal</title>
</head>
<body>
<div class="container-fluid" style="padding-top:10px">
    <header>
        <div class="row top-nav-row">
        &nbsp;&nbsp;&nbsp;&nbsp;<h1>CompuWave</h1>
        </div>

        <div class="row">
            <nav class="col-lg-12">
                <br>
                <ul class="nav justify-content-end header-elements-stu">
                    <li class="nav-item dropdown" style="margin-right:10px">
                        <a class="nav-link btn btn-primary" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Team
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="overall_team_members.php">View Members</a>
                            <a class="dropdown-item" href="overall_add_member.php">Add Members</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown" style="margin-right:10px">
                        <a class="nav-link btn btn-info" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Events
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="overall_events.php">View Events</a>
                            <a class="dropdown-item" href="overall_add_event.php">Add Events</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-danger" href="signout.php">Sign OUT</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
</div>
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

$incharge_roll=$_SESSION['roll'];
$con=mysqli_connect('localhost','root','','sbsdigifunction');
$sql1="SELECT * FROM events WHERE incharge_roll=$incharge_roll";
$result1=mysqli_query($con,$sql1);
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
        <div class="row">
        &nbsp;&nbsp;&nbsp;&nbsp;<h1>CompuWave</h1>
        </div>
        <div class="row">
        <?php
        if(mysqli_num_rows($result1)>0){
            while($row = mysqli_fetch_assoc($result1)){
        ?>
            &nbsp;&nbsp;&nbsp;&nbsp;<h3><?php echo $row['Ename']; ?></h3>
        <?php
        $event_name = $row['Ename'];
        }
        }
        ?>
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
                            <a class="dropdown-item" href="team_members_event_man.php">View Members</a>
                            <a class="dropdown-item" href="add_member_event_man.php">Add Members</a>
                        </div>
                    </li>
                    <li class="nav-item" style="margin-right:10px;">
                        <a class="nav-link btn btn-info" href="event_man_registered.php">Registered Students</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-danger" href="signout.php">Sign OUT</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
</div>

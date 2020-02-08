<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Sign Up</title>

    <?php
        if(isset($_POST['submit'])){

            $name=$_POST['name'];
            $roll=$_POST['roll'];
            $contact=$_POST['contact'];
            $year=$_POST['year'];
            $course=$_POST['course'];
            $branch=$_POST['branch'];
            if($_POST['password']==$_POST['cPassword']){
                $password=md5($_POST['password']);
            }
            else{
                echo "<script>alert('The passwords did not match. Please make sure they are matching');
                window.location.replace('sign_up.php')</script>";
            }
            $designation="STUDENT";


            $con=mysqli_connect('localhost','root','','sbsdigifunction');
            $sql="INSERT INTO `login_id`(`name`, `roll`, `contact`, `year`, `course`, `branch`, `password`, `designation`) VALUES ('$name','$roll','$contact','$year','$course','$branch','$password','$designation')";
            $result=mysqli_query($con,$sql);
            if($result){
                echo "<script>alert('Please proceed to login');
                window.location.replace('login.php')</script>";
            }
            else{
                echo "<script>alert('There was some issue in updating your credentials. Please enter them again and retry. Thank You');</script>";
            }
        }
    ?>
</head>
<body>
    <header>
        <div class="container">
            <div class="login">
                <h1>Sign Up</h1>
            </div>

            <div class="row login_as">
                <div class="col-sm-12">
                    <div class="card">
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="row">
                            <div class="form-group col-lg-12">
                                <label class="col-lg-2 text-left">Name</label>
                                <input type="text" name="name" class="form-control col-lg-10 float-right" placeholder="Full Name" required>
                            </div>
                            </div>
                            <div class="row">
                            <div class="form-group col-lg-12">
                                <label class="col-lg-2 text-left">Roll Number</label>
                                <input type="number" name="roll" class="form-control col-lg-10 float-right" placeholder="University issued roll number" required>
                            </div>
                            </div>
                            <div class="row">
                            <div class="form-group col-lg-12">
                                <label class="col-lg-2 text-left">Phone Number</label>
                                <input type="number" name="contact" class="form-control col-lg-10 float-right" placeholder="Contact" required>
                            </div>
                            </div>
                            <div class="row">
                            <div class="form-group col-lg-12">
                                <label class="col-lg-2 text-left">Year</label>
                                <input type="number" min="1" max="4" name="year" class="form-control col-lg-10 float-right" placeholder="eg: 3" required>
                            </div>
                            </div>
                            <div class="row">
                            <div class="form-group col-lg-12">
                                <label class="col-lg-2 text-left">Course</label>
                                <input type="text" name="course" class="form-control col-lg-10 float-right" placeholder="eg: B.tech" required>
                            </div>
                            </div>
                            <div class="row">
                            <div class="form-group col-lg-12">
                                <label class="col-lg-2 text-left">Branch</label>
                                <input type="text" name="branch" class="form-control col-lg-10 float-right" placeholder="eg: C.S.E" required>
                            </div>
                            </div>
                            <div class="row">
                            <div class="form-group col-lg-12">
                                <label class="col-lg-2 text-left">Password</label>
                                <input type="password" name="password" class="form-control col-lg-10 float-right" placeholder="Password" required>
                            </div>
                            </div>
                            <div class="row">
                            <div class="form-group col-lg-12">
                                <label for="exampleInputPassword1" class="col-lg-2 text-left">Confirm Password</label>
                                <input type="password" name="cPassword" class="form-control col-lg-10 float-right" id="exampleInputPassword1" placeholder="Confirm Password" required>
                            </div>
                            </div>
                            <button type="submit" class="btn btn-primary float-right" name="submit">Submit</button>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
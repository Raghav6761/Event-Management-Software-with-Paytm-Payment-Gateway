<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Student Login</title>
    
    <?php
        // $_SESSION['roll'] = $_POST['roll'];
        // header('LOCATION: events_stu.php');
        // die();
    ?>
</head>
<body>
    <header>
        <div class="container">
            <div class="login">
                <h1>Login</h1>
            </div>

            <div class="row login_as">
                <div class="col-sm-12">
                    <div class="card">
                    <div class="card-body">
                        <form method="POST" action="login_details_check_db.php">
                            <div class="row">
                            <div class="form-group col-lg-12">
                                <label for="exampleInputEmail1" class="col-lg-2 text-left">Roll Number</label>
                                <input type="number" class="form-control col-lg-10 float-right" name="roll" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">                            
                            </div>
                            </div>
                            <div class="row">
                            <div class="form-group col-lg-12">
                                <label for="exampleInputPassword1" class="col-lg-2 text-left">Password</label>
                                <input type="password" class="form-control col-lg-10 float-right" name="password" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            </div>
                            <input type="submit" name="submit" class="btn btn-primary float-rights">
                            <!-- <button type="submit" name="submit" class="btn btn-primary float-right">Submit</button> -->
                        </form>
                        <a href="sign_up.php" class="float-right login_sign_up" style="text-decoration:underline">Click here to sign up</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <?php include('footer.php'); ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
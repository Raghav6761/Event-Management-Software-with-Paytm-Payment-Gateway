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
        session_start();
        // echo $_SESSION['email'];
        if(isset($_GET['submit'])){
            $_SESSION['email'] = $_GET['email'];
            // $_SESSION['user'] = the user or roll number from the database will come here;
            header('LOCATION: overall_events.php');
            die();
        }
    ?>
</head>
<body>
    <header>
        <div class="container">
            <div class="login">
                <h1>President / Vice President</h1>
            </div>

            <div class="row login_as">
                <div class="col-sm-12">
                    <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="row">
                            <div class="form-group col-lg-12">
                                <label for="exampleInputEmail1" class="col-lg-2 text-left">Email address</label>
                                <input type="email" class="form-control col-lg-10 float-right" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">                            
                            </div>
                            </div>
                            <div class="row">
                            <div class="form-group col-lg-12">
                                <label for="exampleInputPassword1" class="col-lg-2 text-left">Password</label>
                                <input type="password" class="form-control col-lg-10 float-right" name="password" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            </div>
                            <input type="submit" name="submit" class="btn btn-primary float-right">
                            <!-- <button type="submit" name="submit" class="btn btn-primary float-right">Submit</button> -->
                        </form>
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
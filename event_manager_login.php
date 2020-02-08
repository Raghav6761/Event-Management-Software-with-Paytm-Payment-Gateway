<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Select login type</title>

    <?php
        session_start();
        if(isset($_GET['submit'])){
            $_SESSION['email'] = $_GET['email'];
            header('LOCATION: event_man_registered.php');
        }
    ?>
</head>
<body>
    <header>
        <div class="container">
            <div class="login">
                <h1>Event Manager</h1>
            </div>

            <div class="row login_as">
                <div class="col-sm-12">
                    <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="row">
                            <div class="form-group col-lg-12">
                                <label for="exampleInputEmail1" class="col-lg-2 text-left">Email address</label>
                                <input type="email" name="email" class="form-control col-lg-10 float-right" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">                            
                            </div>
                            </div>
                            <div class="row">
                            <div class="form-group col-lg-12">
                                <label for="exampleInputPassword1" class="col-lg-2 text-left">Password</label>
                                <input type="password" name="password" class="form-control col-lg-10 float-right" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            </div>
                            <input type="submit" name="submit" class="btn btn-primary float-right">
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
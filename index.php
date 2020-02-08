<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Select login type</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="login">
                <h1>Login as</h1>
            </div>

            <div class="row login_as">
                <div class="col-sm-4">
                <a href="stu_login.php">
                    <div class="card bg-primary text-white">
                    <div class="card-body">
                        <h3 class="card-title">Student</h3>
                    </div>
                    </div>
                </a>
                </div>
                <div class="col-sm-4">
                <a href="event_manager_login.php">
                    <div class="card bg-success text-white">
                    <div class="card-body">
                        <h3 class="card-title">Event Manager</h3>
                    </div>
                    </div>
                </a>
                </div>
                <div class="col-sm-4">
                <a href="manager_overall_login.php">
                    <div class="card bg-dark text-white">
                    <div class="card-body">
                        <h3 class="card-title">Function Manager</h3>
                    </div>
                    </div>
                </a>
                </div>
            </div>
        </div>
    </header>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
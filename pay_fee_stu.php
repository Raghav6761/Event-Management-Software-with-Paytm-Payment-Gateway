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
    <meta name="GENERATOR" content="Evrsoft First Page">
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
<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
    header("Expires: 0");
	$rest = substr($_SESSION['name'], 0, 3);
	
    $roll = $_GET['roll'];
    $sql1="SELECT * FROM events WHERE incharge_roll=$roll";
    $result1=mysqli_query($con,$sql1);

    if(mysqli_num_rows($result1)>0){
        while($row=mysqli_fetch_assoc($result1)){
?>
<br><br>
<div class="container">
    <!-- <h1>Here will be the payment gateway</h1> -->
    <br><br>
	<form method="post" action="pgRedirect.php?roll=<?php echo $roll; ?>">
		<table class="table table-bordered table-striped">
			<tbody>
				<tr>
					<th>S.No</th>
					<th>Label</th>
					<th>Value</th>
				</tr>
				<tr>
					<td>1</td>
					<td><label>ORDER_ID::*</label></td>
					<td><input id="ORDER_ID" class="form-control form-control-sm" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off" value="<?php echo  strtoupper($rest) . rand(10000,99999999)?>" readonly>
					</td>
				</tr>
				<tr>
					<td>2</td>
					<td><label>CUSTID ::*</label></td>
					<td><input id="CUST_ID" class="form-control form-control-sm" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="<?php echo $_SESSION['roll']; ?>" readonly></td>
				</tr>
				<tr>
					<td>3</td>
					<td><label>INDUSTRY_TYPE_ID ::*</label></td>
					<td><input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail" class="form-control form-control-sm" readonly></td>
				</tr>
				<tr style="display:none">
					<td>4</td>
					<td><label>Channel ::*</label></td>
					<td><input id="CHANNEL_ID" tabindex="4" maxlength="12"
						size="12" name="CHANNEL_ID" autocomplete="off" value="WEB" class="form-control form-control-sm" readonly>
					</td>
				</tr>
				<tr>
					<td>5</td>
					<td><label>Fee*</label></td>
					<td><input title="TXN_AMOUNT" tabindex="10"
						type="text" name="TXN_AMOUNT"
						value="<?php echo $row['fee']; ?>" class="form-control form-control-sm" readonly>
					</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input value="Proceed to Pay" type="submit" class="btn btn-primary float-right" onclick=""></td>
				</tr>
			</tbody>
		</table>
		* - Mandatory Fields
	</form>
    <a href="receipt_stu.php" class="btn btn-primary float-right">Proceed</a>
</div>

<?php 
        }
    }
include('footer.php'); 
?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
<?php
session_start();

header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

$roll=$_GET['roll'];

// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application�s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.


if(!$_SESSION['roll']){
    echo "<script>alert('Please Sign IN');</script>";
    ?>
    <script>
        window.location='login.php';
    </script>
    <?php
}
$student_roll = $_SESSION['roll'];
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
<br><br><br>
<div class="container" style="background:none">
    <div class="row">
        <div class="col-lg-2">
            <h2 class="text-center">Logo</h2>
        </div>
        <div class="col-lg-10">
            <h2 class="text-center">Compuwave</h2>
            <br>
            <h3 class="text-center">Receipt</h3>
        </div>
    </div>
</div>
<?php
if($isValidChecksum == "TRUE") {
	// echo "<b>Checksum matched and following are the transaction details:</b>" . "<br/>";
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		echo "<script>alert('Transaction successful');</script>" . "<br/>";
		//Process your transaction here as success transaction.
		//Verify amount & order id received from Payment gateway with your application's order id and amount.
	}
	else {
		echo "<b>Transaction status is failure</b>" . "<br/>";
	}
if (isset($_POST) && count($_POST)>0 )
{
    $arr3=array();
    $arr3 = $_POST;
    // foreach($_POST as $paramName => $paramValue) {
    //         echo "<br/>" . $paramName . " = " . $paramValue;
    // }
    $sql1="SELECT * FROM events WHERE incharge_roll=$roll";
    $result1=mysqli_query($con,$sql1);

    if(mysqli_num_rows($result1)>0){
        while($row = mysqli_fetch_assoc($result1)){
            $sql2="SELECT * FROM login_id WHERE roll=$student_roll";
            $result2=mysqli_query($con,$sql2);
            if(mysqli_num_rows($result2)>0){
                while($show = mysqli_fetch_assoc($result2)){
                    
?>
<div class="container">
    <div class="row">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th scope="row" class="text-center">Receipt No.</th>
                    <td class="text-center"><?php echo $arr3['ORDERID']; ?></td>
                </tr>
                <tr>
                    <th scope="row" class="text-center">Name</th>
                    <td class="text-center"><?php echo $show['name']; ?></td>
                </tr>
                <tr>
                    <th scope="row" class="text-center">Event Name</th>
                    <td class="text-center"><?php echo $row['Ename']; ?></td>
                </tr>
                <tr>
                    <th scope="row" class="text-center">Fee</th>
                    <td class="text-center">Rs. <?php echo $row['fee']; ?></td>
                </tr>
                <tr>
                    <th scope="row" class="text-center">Date</th>
                    <td class="text-center"><?php echo $row['date'] ?></td>
                </tr>
                <tr>
                    <th scope="row" class="text-center">Timings</th>
                    <td class="text-center"><?php echo $row['timings']; ?></td>
                </tr>
                <tr>
                    <th scope="row" class="text-center">Venue</th>
                    <td class="text-center"><?php echo $row['venue']; ?></td>
                </tr>
                <tr>
                    <th scope="row" class="text-center">Phone Number</th>
                    <td class="text-center"><?php echo $row['incharge_contact']; ?></td>
                </tr>
                <tr>
                    <th scope="row" class="text-center">Incharge</th>
                    <td class="text-center"><?php echo $row['incharge_name']; ?></td>
                </tr>
                <tr>
                    <th scope="row" class="text-center">Payment Method</th>
                    <td class="text-center"><?php ECHO $arr3['GATEWAYNAME'];?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?php
$st_name=$show['name'];
$event_name=$row['Ename'];
$fee_paid=$row['fee'];
}
}
}
}
}
}
else {
echo "<b>Checksum mismatched.</b>";
//Process transaction as suspicious.
}
$orderid=$arr3['ORDERID'];
$pay_method=$arr3['GATEWAYNAME'];
$st_roll=$student_roll;
if(isset($arr3['GATEWAYNAME'])){
    $sql3="INSERT INTO `payments`(`order_id`, `payment_method`, `st_name`, `st_roll`, `event_name`) VALUES ('$orderid','$pay_method','$st_name','$st_roll','$event_name')";
}
else{
    echo "<script>alert('an error has occured. Please try again');</script>";
}
$result3=mysqli_query($con,$sql3);
?>

<?php include('footer.php'); ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
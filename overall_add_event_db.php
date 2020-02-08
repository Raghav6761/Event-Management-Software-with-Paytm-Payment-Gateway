<?php
session_start();

$Ename = $_POST['event_name'];
$incharge_name = $_POST['incharge_name'];
$incharge_roll = $_POST['incharge_roll'];
$incharge_contact = $_POST['incharge_contact'];
$fee = $_POST['event_fee'];
$date = $_POST['event_date'];
$timings = $_POST['event_timing'];
$venue = $_POST['event_venue'];
if($_POST['password']==$_POST['Cpassword']){
    $password = $_POST['password'];
    $password = md5($password);
}
else{
    echo "<script>prompt('The data in the field /'password/' and /'confirm password/' did not match. Please make sure they are same.')</script>";
}

$con=mysqli_connect('localhost','root','','sbsdigifunction');
$sql="INSERT INTO `events`(`Ename`, `incharge_name`, `incharge_roll`, `incharge_contact`, `fee`, `date`, `timings`, `venue`, `password`) VALUES ('$Ename','$incharge_name','$incharge_roll','$incharge_contact','$fee','$date','$timings','$venue','$password')";
$result=mysqli_query($con,$sql);
if($result){
    echo "<script>alert('The event has been added. Please check it in the table.');</script>";
    $sql2="INSERT INTO `login_id`(`name`, `roll`, `contact`,`password`, `designation`) VALUES ('$incharge_name','$incharge_roll','$incharge_contact','$password','EM')";
    $result2=mysqli_query($con,$sql2);
    if($result2){
        echo "<script>alert('Login ID: ". $incharge_roll ."<br> And the fore mentioned password');</script>";
    }
}
else{
    echo "<script>alert('The event could not be uploaded due to some technical errors. Please re-enter the details.');</script>";
}
?>
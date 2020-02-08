<?php
session_start();
$con=mysqli_connect('localhost','root','','sbsdigifunction');
$sql1="SELECT * FROM login_id";
$result1=mysqli_query($con,$sql1);
if(isset($_POST['submit'])){
    if(mysqli_num_rows($result1)>0){
        while($row = mysqli_fetch_assoc($result1)){
            if($_POST['roll']==$row['roll']){
                if(md5($_POST['password'])==$row['password']){
                    $_SESSION['name']=$row['name'];
                    if($row['designation']=="FM"){
                        echo "<script>alert('logged in as Function Manager');
                        window.location.replace('overall_events.php')</script>";
                    }
                    else if($row['designation']=="STUDENT"){
                            echo "<script>alert('logged in');
                            window.location.replace('events_stu.php');</script>";
                    }
                    else if($row['designation']=="EM"){
                        echo "<script>alert('logged in as Event Manager')
                        window.location.replace('event_man_registered.php')</script>";
                    }
                    // else{
                    //     echo "<script>alert('designation not found')</script>";
                    // }
                    
                }
                else{
                    echo "<script>alert('password did not match. Please Try Again');
                    window.location.replace('login.php')</script>";
                }
            }
            // else{
            //     echo "<script>alert('roll number not found')</script>";
            // }
        }
    }
    $_SESSION['roll']=$_POST['roll'];

}
?>
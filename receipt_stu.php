<?php include('header_stu.php'); 
$roll=$_GET['roll'];
$st_roll=$_SESSION['roll'];
$sql2="SELECT * FROM `payments` WHERE st_roll=$st_roll";
$result2=mysqli_query($con,$sql2);
?>
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
<div class="container">
    <div class="row">
        <table class="table table-bordered table-striped">
            <tbody>
            <?php
            if(mysqli_num_rows($result2)>0){
                while($row = mysqli_fetch_assoc($result2)){
                    $sql3="SELECT * FROM `events` WHERE incharge_roll=$roll";
                    $result3 = mysqli_query($con,$sql3);
                    if(mysqli_num_rows($result3)>0){
                        while($show = mysqli_fetch_assoc($result3)){
                            if($st_roll==$row['st_roll'] && $roll==$show['incharge_roll'] && $show['Ename']==$row['event_name']){


            ?>
                <tr>
                    <th scope="row" class="text-center">Receipt Number</th>
                    <td class="text-center"><?php echo $row['order_id']; ?></td>
                </tr>
                <tr>
                    <th scope="row" class="text-center">Name</th>
                    <td class="text-center"><?php echo $row['st_name']; ?></td>
                </tr>
                <tr>
                    <th scope="row" class="text-center">Event Name</th>
                    <td class="text-center"><?php echo $show['Ename']; ?></td>
                </tr>
                <tr>
                    <th scope="row" class="text-center">Fee</th>
                    <td class="text-center">Rs. <?php echo $show['fee']; ?></td>
                </tr>
                <tr>
                    <th scope="row" class="text-center">Date</th>
                    <td class="text-center"><?php echo $show['date']; ?></td>
                </tr>
                <tr>
                    <th scope="row" class="text-center">Timings</th>
                    <td class="text-center"><?php echo $show['timings']; ?></td>
                </tr>
                <tr>
                    <th scope="row" class="text-center">Venue</th>
                    <td class="text-center"><?php echo $show['venue']; ?></td>
                </tr>
                <tr>
                    <th scope="row" class="text-center">Phone Number</th>
                    <td class="text-center"><?php echo $show['incharge_contact']; ?></td>
                </tr>
                <tr>
                    <th scope="row" class="text-center">Incharge</th>
                    <td class="text-center"><?php echo $show['incharge_name']; ?></td>
                </tr>
                <tr>
                    <th scope="row" class="text-center">Payment Method</th>
                    <td class="text-center"><?php echo $row['payment_method']; ?></td>
                </tr>
            <?php
                                        }

                                    }
                                }
                            }
                        }
            ?>
            </tbody>
        </table>
    </div>
</div>

<?php include('footer.php'); ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
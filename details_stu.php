<?php include('header_stu.php'); 
$roll = $_GET['roll'];
$sql1="SELECT * FROM events WHERE incharge_roll=$roll";
$result1=mysqli_query($con,$sql1);

if(mysqli_num_rows($result1)>0){
    while($row=mysqli_fetch_assoc($result1)){
?>
<div class="container" style="background:none;margin-top:70px">
        <h1><!--Event Name-->
        <?php echo $row['Ename'];?>
        <?php #echo $roll; ?></h1>
    </div>
<div class="container">
    <div class="row">
        <table class="table table-bordered table-striped">
            <tbody>
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
                    <td class="text-center"><?php echo $row['date']; ?></td>
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
                    <th scope="row" colspan=2><a href="pay_fee_stu.php?roll=<?php echo $row['incharge_roll']; ?>" class="btn btn-primary float-right">Pay Fees</a></th>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?php
        }
    }
?>

<?php include('footer.php'); ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
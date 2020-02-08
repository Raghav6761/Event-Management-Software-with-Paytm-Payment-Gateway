<?php
include('header_stu.php');
$studentRoll=$_SESSION['roll'];
$sql1="SELECT * FROM `payments` WHERE st_roll=$studentRoll";
$result1=mysqli_query($con,$sql1);
?>

<br><br><br>
<div class="container" style="background:none;">
    <h1>Registered Events</h1>
</div>
<div class="container events_stu_table">
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <!-- <th scope="col" class="text-center">S.No</th> -->
                <th scope="col" class="text-center">Event Name</th>
                <th scope="col" class="text-center">Fee</th>
                <th scope="col" class="text-center">Venue</th>
                <th scope="col" class="text-center">Date</th>
                <th scope="col" class="text-center">Incharge</th>
                <th scope="col" class="text-center">Phone Number</th>
                <th scope="col" class="text-center">Details</th>
                <th scope="col" class="text-center">Receipt</th>
            </tr>
        </thead>
        <tbody>
        <?php
        if(mysqli_num_rows($result1)>0){
            while($row = mysqli_fetch_assoc($result1)){
                $sql2="SELECT * FROM events";
                $result2=mysqli_query($con,$sql2);
                if(mysqli_num_rows($result2)>0){
                    while($show = mysqli_fetch_assoc($result2)){
                        if($show['Ename']==$row['event_name']){
        ?>
            <tr>
                <!-- <th scope="row" class="text-center">1</th> -->
                <!-- <td colspan=3>Mark</td> -->
                <td class="text-center"><?php echo $show['Ename']; ?></td>
                <td class="text-center">Rs. <?php echo $show['fee']; ?></td>
                <td class="text-center"><?php echo $show['venue']; ?></td>
                <td class="text-center"><?php echo $show['date']; ?></td>
                <td class="text-center"><?php echo $show['incharge_name']; ?></td>
                <td class="text-center"><?php echo $show['incharge_contact']; ?></td>
                <!-- <td><button class="btn btn-info">Details</button></td> -->
                <td class="text-center"><span class="badge badge-primary"><a href="details_stu.php?roll=<?php echo $show['incharge_roll']; ?>" class="text-white">Details</a></span></td>
                <td class="text-center"><span class="badge badge-info"><a href="receipt_stu.php?roll=<?php echo $show['incharge_roll']; ?>" class="text-white">Receipt</a></span></td>
            </tr>
        <?php
            }}}}}
        ?>
            <tr>
                <!-- <th scope="row" class="text-center">2</th> -->
                <td class="text-center">something</td>
                <td class="text-center">Rs. 100</td>
                <td class="text-center">G-420</td>
                <td class="text-center">30-02-20</td>
                <td class="text-center">anyone</td>
                <td class="text-center">1636323200</td>
                <td class="text-center"><span class="badge badge-primary"><a href="details_stu.php" class="text-white">Details</a></span></td>
                <td class="text-center"><span class="badge badge-info"><a href="receipt_stu.php" class="text-white">Receipt</a></span></td>
            </tr>
            <tr>
                <!-- <th class="text-center" scope="row">3</th> -->
                <td class="text-center">something else</td>
                <td class="text-center">Rs. 20</td>
                <td class="text-center">F-Block</td>
                <td class="text-center">26-09-19</td>
                <td class="text-center">anyone else</td>
                <td class="text-center">0912091209</td>
                <td class="text-center"><span class="badge badge-primary"><a href="details_stu.php?<?php// echo $_row['Ename']; ?>" class="text-white">Details</a></span></td>
                <td class="text-center"><span class="badge badge-info"><a href="receipt_stu.php?<?php// echo $_row['Ename']; ?>" class="text-white">Receipt</a></span></td>
            </tr>
        </tbody>
    </table>
</div>

<?php include('footer.php'); ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
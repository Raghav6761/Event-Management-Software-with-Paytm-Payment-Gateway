<?php include('header_event_man.php'); ?>
    

<br><br><br>
<div class="container" style="background:none;">
    <h1>Registered Students</h1>
</div>
<div class="container events_stu_table">
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col" class="text-center">S.No</th>
                <th scope="col" class="text-center">Name</th>
                <th scope="col" class="text-center">Roll No.</th>
                <th scope="col" class="text-center">Phone number</th>
                <th scope="col" class="text-center">Paid Via</th>
                <!-- <th scope="col" class="text-center">Receipt</th> -->
            </tr>
        </thead>
        <tbody>
        <?php
        $count=0;
        $sql2="SELECT * FROM `payments` WHERE event_name='$event_name'";
        $result3=mysqli_query($con,$sql2);
        // echo "<script>alert('".$result3."');</script>";
        if(mysqli_num_rows($result3)>0){
            while($row1 = mysqli_fetch_assoc($result3)){
                $count=$count+1;
                $st_roll = $row1['st_roll'];
                $sql3="SELECT * FROM `login_id` WHERE roll='$st_roll'";
                $result4=mysqli_query($con,$sql3);
                if(mysqli_num_rows($result4)>0){
                    while($show = mysqli_fetch_assoc($result4)){
        ?>
            <tr>
                <th scope="row" class="text-center"><?php echo $count; ?></th>
                <td class="text-center"><?php echo $row1['st_name']; ?></td>
                <td class="text-center"><?php echo $row1['st_roll']; ?></td>
                <td class="text-center"><?php echo $show['contact']; ?></td>
                <td class="text-center"><?php echo $row1['payment_method']; ?></td>
                <!-- <td class="text-center"><span class="badge badge-info"><a href="receipt_man.php" class="text-white">Receipt</a></span></td> -->
                <!-- <td class="text-center"><span class="badge badge-info"><a href="receipt_stu.php?roll=<?php// echo $row1['incharge_roll']; ?>" class="text-white">Receipt</a></span></td> -->
            </tr>
        <?php
            }
        }
    }
}
        ?>
        </tbody>
    </table>
</div>

<?php include('footer.php'); ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
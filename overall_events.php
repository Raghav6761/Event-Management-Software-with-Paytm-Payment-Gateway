<?php include('header_overall.php'); 
$user = $_SESSION['roll'];
$sql1="SELECT * FROM events";
$result1=mysqli_query($con,$sql1);
?>

<br><br><br>
<div class="container" style="background:none;">
    <h1>Events</h1>
</div>
<div class="container events_stu_table">
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col" class="text-center">S.No</th>
                <th scope="col" class="text-center">Event Name</th>
                <th scope="col" class="text-center">Fee</th>
                <th scope="col" class="text-center">Venue</th>
                <th scope="col" class="text-center">Date</th>
                <th scope="col" class="text-center">Incharge</th>
                <th scope="col" class="text-center">Phone Number</th>
                <th scope="col" class="text-center">Details</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $count=0;
        if(mysqli_num_rows($result1)>0){
            while($row = mysqli_fetch_assoc($result1)){
                $count+=1;
        ?>
            <tr>
                <th scope="row" class="text-center"><?php echo $count; ?></th>
                <!-- <td colspan=3>Mark</td> -->
                <td class="text-center"><?php echo $row['Ename']; ?></td>
                <td class="text-center">Rs. <?php echo $row['fee']; ?></td>
                <td class="text-center"><?php echo $row['venue']; ?></td>
                <td class="text-center"><?php echo $row['date']; ?></td>
                <td class="text-center"><?php echo $row['incharge_name']; ?></td>
                <td class="text-center"><?php echo $row['incharge_contact']; ?></td>
                <!-- <td><button class="btn btn-info">Details</button></td> -->
                <td class="text-center"><span class="badge badge-primary"><a href="overall_event_details.php?roll=<?php echo $row['incharge_roll']; ?>" class="text-white">Details</a></span></td>
            </tr>
        <?php                        
            }
        }
        ?>
        </tbody>
    </table>
</div>

<footer>
    <div class="container-fluid">
        <div class="row">
            <p class="text-center m-auto">COPYRIGHT &copy; SBSSTC 2019 | Made by Raghav Watts</p>
            <span class="float-right">+91 9356733000</span>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
<?php include('header_overall.php'); ?>

<div class="container" style="background:none;margin-top:70px">
        <h1>Add Event <?php//echo $_row['event name'] ?></h1>
    </div>
<div class="container">
    <form action="overall_add_event_db.php" method="POST">
        <div class="row">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th scope="row" class="text-center">Event Name</th>
                        <td class="text-center"><input type="text" name="event_name" id="" class="form-control"></td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">Fee</th>
                        <td class="text-center"><input type="number" name="event_fee" id="" class="form-control"></td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">Date</th>
                        <td class="text-center"><input type="text" name="event_date" id="" class="form-control"></td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">Timings</th>
                        <td class="text-center"><input type="text" name="event_timing" id="" class="form-control"></td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">Venue</th>
                        <td class="text-center"><input type="text" name="event_venue" id="" class="form-control"></td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">Incharge Name</th>
                        <td class="text-center"><input type="text" name="incharge_name" id="" class="form-control"></td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">Roll Number</th>
                        <td class="text-center"><input type="number" name="incharge_roll" id="" class="form-control"></td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">Phone Number</th>
                        <td class="text-center"><input type="number" name="incharge_contact" id="" class="form-control"></td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">Password</th>
                        <td class="text-center"><input type="password" name="password" id="" class="form-control"></td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">Confirm Password</th>
                        <td class="text-center"><input type="password" name="Cpassword" id="" class="form-control"></td>
                    </tr>
                    <tr>
                        <th scope="row" colspan=2><input type="submit" name="submit" class="btn btn-primary float-right" value="Add Event"></th>
                    </tr>
                </tbody>
            </table>
        </div>
    </form>
</div>

<?php include('footer.php'); ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
<?php include('header_event_man.php'); ?>

<div class="container" style="background:none;margin-top:70px">
        <h1>Add Member <?php//echo $_row['event name'] ?></h1>
    </div>
<div class="container">
    <form action="">
        <div class="row">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th scope="row" class="text-center">Name</th>
                        <td class="text-center"><input type="text" name="team_name" id="" class="form-control"></td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">Roll Number</th>
                        <td class="text-center"><input type="number" name="team_roll" id="" class="form-control"></td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">Role</th>
                        <td class="text-center"><input type="text" name="role" id="" class="form-control"></td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">Phone Number</th>
                        <td class="text-center"><input type="number" name="team_contact" id="" class="form-control"></td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">Role Descrption</th>
                        <!-- <td class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente suscipit,<br> 
                            praesentium laboriosam tempora aspernatur, quasi<br> officia similique quam qui tenetur ut eius magni! 
                            A accusantium eius, ut repudiandae at temporibus.</td> -->
                        <td><textarea name="role-description" id="" cols="30" class="form-control" rows="5"></textarea></td>
                    </tr>
                    <tr>
                        <th scope="row" colspan=2><input type="submit" class="btn btn-primary float-right" value="Add Member"></th>
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
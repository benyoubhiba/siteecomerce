
<?php
	// Initialiser la session
	session_start();


?>

<?php include ('header.php');?> 

 

	<div>
<div class="container-fluid">
    <div class="card shadow md-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-blod text-primary">
            <button  type="submit" name="updatebtn" class="btn ">
			<a style="color:black;"  > user</a> 
            </button>
            </h6>
        
            <div class="table-reponsive">
                <?php
                $connection = mysqli_connect("localhost","root","","siteecomerce");
                $query = "SELECT * FROM users";
                $query_run = mysqli_query($connection,$query);
                
                ?>
          
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Edit</th>
                            <th>Dellete</th>
                        </tr>
                    </thead>
                    <tbody>
					<?php
                        if(mysqli_num_rows($query_run) > 0)
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                                ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['username'];?></td>
                            <td><?php echo $row['email'];?></td>
                            <td><?php echo $row['password'];?></td>
                
                            <td>
                            <form action="edit.php" method="POST">
                            <input type="hidden" name="edit_id" value="<?php echo $row['id'];?>">
                            <button type="submit" name="edit_btn" class="btn btn-success">Edit</button>
                            </form>
                            </td>
                            <td>
                            <form action="delete.php" method="POST">
                                <input type="hidden" name="delete_id" value="<?php echo $row['id'];?>">
                                <button type="submit" name="delete_btn" class="btn btn-danger">Dellete</button>
                            </form>
                            </td>
                        </tr>
                        <?php
                            }
                        }
                        else {
                            echo"No Record Found";
                        }
                        ?>
                </table>
            </div>
        </div>
    </div>
</div>

		<script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>

    <script src="js/main.js"></script>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
  <script src="js/sweetalert.min.js"></script>
 
	</body>
</html>
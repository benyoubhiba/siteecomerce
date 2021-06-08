<?php
 require('function.php');
 $con=mysqli_connect("localhost","root","","siteecomerce");
 if(isset($_GET['type']) && $_GET['type']!=''){
	$type=get_safe_value($con,$_GET['type']);
	if($type=='delete'){
		$id=get_safe_value($con,$_GET['id']);
		$delete_sql="delete from contact where id='$id'";
		mysqli_query($con,$delete_sql);
	}
}

$sql="select * from contact order by id desc";
$res=mysqli_query($con,$sql);
?>       

<?php include ('header.php');?> 
          
<div class="container-fluid">
    <div class="card shadow md-4">
        
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
							   <th class="serial">#</th>
							   <th>ID</th>
							   <th>Name</th>
							   <th>Email</th>
							   <th>Mobile</th>
							   <th>Query</th>
							   <th>Date</th>
							   <th>delete</th>
							</tr>
                    </thead>
                    <tbody>
					<?php
                      $i=1;
                      while($row=mysqli_fetch_assoc($res)){
                                ?>
                        <tr>
                        <td class="serial"><?php echo $i?></td>
							   <td><?php echo $row['id']?></td>
							   <td><?php echo $row['name']?></td>
							   <td><?php echo $row['email']?></td>
							   <td><?php echo $row['mobile']?></td>
							   <td><?php echo $row['comment']?></td>
							   <td><?php echo $row['added_on']?></td>

                            </td>
                            <td>
                            <form action="deletcontact.php" method="POST">
                                <input type="hidden" name="delete_id" value="<?php echo $row['id'];?>">
                                <button type="submit" name="delete_btn" class="btn btn-danger">Dellete</button>
                            </form>
                            </td>
                        
                      
                        </tr>
                        <?php     } ?>
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
  <script src="js/custom.js"></script>
  <script src="js/sweetalert.min.js"></script>
  <script src="active-inactive-script.js"></script>
 
	</body>
</html>
   
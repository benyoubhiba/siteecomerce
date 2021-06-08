<?php
 require('function.php');
 $con=mysqli_connect("localhost","root","","siteecomerce");
if (isset($_GET['type']) && $_GET['type']!=''){
    $type= mysqli_real_escape_string($con,'type');
    if ($type=='status'){
      
        $operation= mysqli_real_escape_string($con,$_GET['operation']);
          $id= mysqli_real_escape_string($con,$_GET['id']);
          if($operation=='active'){
              $status='1';
          }else{
            $status='0';
          }
          $update_status="update categorie set status='$status'where id='$id'";
          mysqli_query($con,$update_status);
    }
}
$sql="select * from categorie order by categorie desc";
$res=mysqli_query($con,$sql);


?> 
          

<?php include ('header.php');?> 
          
<div class="container-fluid">
    <div class="card shadow md-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-blod text-primary">
            <button type="submit" name="updatebtn" class="btn ">
			<a style="color:black;" href="add_categorie.php">Add Categorie</a> 
            </button>
            </h6>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="serial"></th>
                            <th>id</th>
                            <th>categorie</th>
                            <th>status</th>
                            <th>Edit</th>
                            <th>Dellete</th>
                        </tr>
                    </thead>
                    <tbody>
					<?php
                      $i=1;
                      while($row=mysqli_fetch_assoc($res)){
                                ?>
                        <tr>
                    <td class="serial"><?php echo $i; ?>#</td>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['categorie'];?></td>
                            <td>
                            <?php
                            if ($row['status']==1){
                          echo "<a href='?type=status&operation=deactive&id=".$row['id']."'>Active</a>";
                            }else{
                                echo "<a href='?type=status&operation=active&id=".$row['id']."'> Deactive</a>";
                            }
                            
                            ?></td>
                            
                            <td>
                           
                            <?php
                            if ($row['status']==1){
                         
                            echo "<span  class='btn btn-success'>
                            <a href='add_categorie.php?edit&id=".$row['id']."'> Edit</a></span>";
                            }
                            ?></td>
                            <td>
                            <form action="deletcategories.php" method="POST">
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
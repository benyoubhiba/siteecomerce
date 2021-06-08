
<?php
// Informations d'identification
session_start();
 require('function.php');
 $con=mysqli_connect("localhost","root","","siteecomerce");
if (isset($_GET['type']) && $_GET['type']!=''){
    $type=get_safe_value($con,$_GET['type']);
    if ($type=='status'){
      
        $operation=get_safe_value($con,$_GET['operation']);
         	$id=get_safe_value($con,$_GET['id']);
          if($operation=='active'){
              $status='1';
          }else{
            $status='0';
          }
          $update_status_sql="update product set status='$status'where id='$id'";
          mysqli_query($con,$update_status_sql);
    }
}
$sql="select product.*,categorie.categorie from product,categorie where product.categories_id=categorie order by product.id desc";

$res=mysqli_query($con,$sql);

?> 

<?php include ('header.php');?> 
          
<div class="container-fluid">
    <div class="card shadow md-30">
        <div class="card-header py-9">
            <h6 class="m-0 font-weight-blod text-primary">
            <button  type="submit" name="updatebtn" class="btn ">
			<a style="color:black;" href="add_product.php">Add Product</a> 
            </button>
            </h6>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="serial">#</th>
                            <th>id</th>

                            <th>name</th>
                            <th>mrp</th>
                            <th>price</th>
                            <th>qty</th>
                            <th>image</th>
                           
                            <th>Edit</th>
                            <th>Delete</th>
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
                            
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['mrp'];?></td>
                            <td><?php echo $row['price']; ?></td>
                            <td><?php echo $row['qty'];?></td>
                            <td><img src="../assets/images/"<?php echo $row['image'];?>/></td>
                           
                  
                  
                            <td>
                           
                            <?php
                            if ($row['status']==1){
                         
                            echo "<span  class='btn btn-success'>
                            <a style='color:xhite;' href='add_product.php?edit&id=".$row['id']."'> Edit</a></span>";
                            }
                            ?></td>
                            <td>
                            <form action="deletproduct.php" method="POST">
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
  
 
	</body>
</html>
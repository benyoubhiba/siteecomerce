
<?php include ('head.php');
require('connection.inc.php');
require('functions.inc.php');
$cat_res=mysqli_query($con,"select * from categorie where status=1 order by categorie asc");
$cat_arr=array();
while($row=mysqli_fetch_assoc($cat_res)){
	$cat_arr[]=$row;	
}


if(isset($_GET['id'])){
	$product_id=mysqli_real_escape_string($con,$_GET['id']);
	if($product_id>0){
		$get_product=get_product($con,'','',$product_id);
	}
}
if(isset($_GET['id'])){
	$product_id=mysqli_real_escape_string($con,$_GET['id']);
	if($product_id>0){
		$get_product=get_product($con,'','',$product_id);
	}
}
?>
    <!-- Page Content -->
    <!-- Items Starts Here -->
    <div class="featured-page">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Featured Items</h1>
            </div>
          </div>
          <div class="col-md-8 col-sm-12">
            <div id="filters" class="button-group">

            <?php
										foreach($cat_arr as $list){
											?>
											<li><a href="categories.php?id=<?php echo $list['id']?>"><?php echo $list['categorie']?></a></li>
											<?php
										}
										?>

   
              <?php
											foreach($cat_arr as $list){
												?>
												<li><a style="color:black;" href="categories.php?id=<?php echo $list['id']?>"><?php echo $list['categorie']?></a></li>
												<?php
											}
											?>
            </div>
          </div>
        </div>
      </div>
    </div>
      
    <div class="featured container no-gutter">
    <div class="row posts">
    <?php 
          

          $conn = mysqli_connect("localhost", "root", "","siteecomerce") ;
          $query= mysqli_query( $conn ,"select * from product");
              
                while($row=mysqli_fetch_array($query))
                {
                    $id=$row['id'];
                    $name=$row["name"];
                    $image=$row["image"];
                    $price=$row["price"];
                    $mrp=$row["mrp"];
                    $short_desc=$row["short_desc"];

                ?>


   
            <div id="1" class="item new col-md-4">
              <a href="single-product.php?id=<?php echo "$id";?>">
                <div class="featured-item">
                  
                  <img height="240px" src="assets/images/B1.jpg "; ?>
                  <h4><?php  echo "$name"; ?></h4>
                  <h4><?php  echo "$short_desc"; ?></h4>
                  <h6><?php  echo "$price"; ?>$</h6>
                </div>
              </a>
            </div>
            <?php

}
?>
        </div>
    </div>
   

    <div class="page-navigation">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <ul>
              <li class="current-page"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Featred Page Ends Here -->




  </div>
  <?php include ('footer.php');?> 
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/isotope.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; 
      function clearField(t){                  
      if(! cleared[t.id]){                   
          cleared[t.id] = 1;  
          t.value='';        
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
<?php include ('head.php');?> 

    <!-- Page Content -->
    <!-- Single Starts Here -->
    <div class="single-product">
      <div class="container">
        <div class="row">
     
        <?php
mysqli_connect("localhost", "root", "","siteecomerce") ;
$page_id= $_GET['id'];     
 $conn = mysqli_connect("localhost", "root", "","siteecomerce") ;
$query= mysqli_query( $conn ,"SELECT * from product where id ='$page_id'");

while($row=mysqli_fetch_array($query))
{
    $id=$row['id'];
    $categories_id=$row['categories_id'];
    $name=$row["name"];
    $description=$row["description"];
    $image=$row["image"];
    $price=$row["price"];
    $mrp=$row["mrp"];
    $meta_title=$row["meta_title"];


?>

          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Single Product</h1>
            </div>
          </div>
         
          <div class="col-md-6">
            <div class="product-slider">
              <div id="slider" class="flexslider">
                <ul class="slides">
                  <li>
                    <img src="assets/images/B1.jpg"/>

                </ul>
              </div>
              
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-content">
              <h4><?php  echo "$name"; ?></h4>
              <h6><?php  echo "$price"; ?></h6>
              <p><?php  echo "$description"; ?></p>
              <span><?php  echo "$mrp"; ?></span>
             
              <div class="down-content">
                <div class="categories">
                  <h6>Category: <span><?php  echo "$categories_id"; ?></span></h6>
    
                        <div class="cart-btn d-flex mb-50">
                                    <p>Qty</p>
                                    <label>Select list:</label>
        <select class="form-control" id="quantity<?php echo $row['id']?>">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
        </select>
           </div>
                 <button class='btn add' data-id="<?php echo $row['id']?>">Add to Cart</button>
                            
                <div class="share">
                  <h6>Share: <span><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-twitter"></i></a></span></h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php

}
?>
      
      <!-- Single Page Ends Here -->


    <!-- Similar Starts Here -->
    <div class="featured-items">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>You May Also Like</h1>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-carousel owl-theme">
              <a href="single-product.html">
                <div class="featured-item">
                  <img src="assets/images/B1.jpg" alt="Item 1">
                  <h4>Proin vel ligula</h4>
                  <h6>$15.00</h6>
                </div>
              </a>
              <a href="single-product.html">
                <div class="featured-item">
                  <img src="assets/images/B2.jpg" alt="Item 2">
                  <h4>Erat odio rhoncus</h4>
                  <h6>$25.00</h6>
                </div>
              </a>
              <a href="single-product.html">
                <div class="featured-item">
                  <img src="assets/images/B3.jpg" alt="Item 3">
                  <h4>Integer vel turpis</h4>
                  <h6>$35.00</h6>
                </div>
              </a>
              <a href="single-product.html">
                <div class="featured-item">
                  <img src="assets/images/B4.jpg" alt="Item 4">
                  <h4>Sed purus quam</h4>
                  <h6>$45.00</h6>
                </div>
              </a>
            
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include ('footer.php');?> 
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/flex-slider.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

<div class="col-md-1">

</div>
<div class="col-md-4">
<h3 class='text-center'> Checkout</h3>
<div id="displayCheckout">
<?php 
    if(!empty($_SESSION['cart'])){
        $outputTable = '';
        $total = 0;
        $outputTable .= "<table class='table table-bordered'><thead><tr><td>Name</td><td>Price</td><td>Quantity</td><td>Action</td> </tr></thead>";
        foreach($_SESSION['cart'] as $key => $value){
            $outputTable .= "<tr><td>".$value['name']."</td><td>".($value['price'] * $value['quantity']) ."</td><td>".$value['quantity']."</td><td><button id=".$value['p_id']." class='btn btn-danger delete'>Delete</button></td></tr>";  
            $total = $total + ($value['price'] * $value['quantity']);
        }
        $outputTable .= "</table>";
        $outputTable .= "<div class='text-center'><b>Total: ".$total."</b></div>";
        echo $outputTable;
    }
?>
</div> 
</div>
</div>



</div>
<script>
$(document).ready(function() {
alldeleteBtn = document.querySelectorAll('.delete')
alldeleteBtn.forEach(onebyone => {
onebyone.addEventListener('click',deleteINsession)
})

function deleteINsession(){
removable_id = this.id;
$.ajax({
    url:'cart.php',
    method:'POST',
    dataType:'json',
    data:{ 
          id_to_remove:removable_id,
          action:'remove' 
    },
    success:function(data){
            $('#displayCheckout').html(data);
alldeleteBtn = document.querySelectorAll('.delete')
alldeleteBtn.forEach(onebyone => {
onebyone.addEventListener('click',deleteINsession)
})
          }
  }).fail( function(xhr, textStatus, errorThrown) {
alert(xhr.responseText);
});

}


$('.add').click(function() { 
id = $(this).data('id');
name = $('#name' + id).val();
price = $('#price' + id).val();
quantity = $('#quantity' + id).val();
  $.ajax({
    url:'cart.php',
    method:'POST',
    dataType:'json',
    data:{
          cart_id : id,
          cart_name : name,
          cart_price : price,
          cart_quantity : quantity,
          action:'add' 
    },
    success:function(data){
            $('#displayCheckout').html(data);
            alldeleteBtn = document.querySelectorAll('.delete')
alldeleteBtn.forEach(onebyone => {
onebyone.addEventListener('click',deleteINsession)
})
          }
  }).fail( function(xhr, textStatus, errorThrown) {
alert(xhr.responseText);
});

})
})
</script>

</body>

</html>


<?php


mysqli_close($conn);


?>

  </body>

</html>

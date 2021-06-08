

<?php include ('head.php');
require('connection.inc.php');


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
            </div>
          </div>
        </div>
      </div>
    </div>
      
    <div class="featured container no-gutter">
    <div class="row posts">
    <?php           
                    $id = escape_string($_GET['id']);
                    $query = "SELECT * FROM product WHERE categories_id = '$id' ";
                    $result = query($query);
                    $row = fetch_array($result);
                    if($row !=null):
                ?>


   
            <div id="1" class="item new col-md-4">
              <a href="single-product.php?id=<?php echo "$id";?>">
                <div class="featured-item">
                  
                  <img height="240px" src=""; ?>
                  <h4><?php echo $row['name'];?></h4>
                  <h4> <?php echo $row['name'];?></h4>
                  <h6><?php echo $row['name'];?>$</h6>
                </div>
              </a>
            </div>
            <?php
                    else :
                    ?>
                    <div class="alert alert-info mt-2 mb-2">Aucun produit trouvé</div>
                    <?php
                        endif ;
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
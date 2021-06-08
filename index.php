<?php
mysqli_connect("localhost", "root", "","siteecomerce") 
?>
<?php include ('head.php');?> 
    

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="caption">
              <h2>Dimondana </h2>
              <div class="line-dec"></div> 
              <p>Profitez de tous types de bijoux en or avec la meilleure qualité imaginable.<strong></strong> Faites vous conseiller par Diamonda dans le choix de vos meilleures affaires 
            
              <div class="main-button">
                <a href="#">Offre -50%</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->


    <!-- Featured Starts Here -->
    <div class="featured-items">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Produit populaire  </h1>
            </div>
          </div>
          <div class="col-md-12">
        
            <div class="owl-carousel owl-theme">
            <a href="single-product.html">
                <div class="featured-item">
                  <img  height="240px" src="assets/images/col1.jpeg" alt="Item 2">
                  <h4>Collier tendance .</h4>
                  <h6>2,050 dhs</h6>
                </div>
              </a>
             
              <a href="single-product.html">
                <div class="featured-item">
                  <img  height="240px" src="assets/images/col1.jpeg" alt="Item 2">
                  <h4>Collier tendance .</h4>
                  <h6>2,050 dhs</h6>
                </div>
              </a>
              <a href="single-product.html">
                <div class="featured-item">
                  <img  height="240px"src="assets/images/P3.jpg" alt="Item 3">
                  <h4>COLD02COLD02</h4>
                  <h6>8,450 dhs</h6>
                </div>
              </a>
              <a href="single-product.html">
                <div class="featured-item">
                  <img  height="240px" src="assets/images/strut-jewelry-petite-gemstone-necklace-new-gold_grande.jpg" alt="Item 4">
                  <h4>COL03</h4>
                  <h6>3,000 dhs</h6>
                </div>
              </a>
              <a href="single-product.html">
                <div class="featured-item">
                  <img   height="240px"src="assets/images/p8.jpg" alt="Item 5">
                  <h4>Morbi aliquet</h4>
                  <h6>$55.00</h6>
                </div>
              </a>
              <a href="single-product.html">
                <div class="featured-item">
                  <img  height="240px" src="assets/images/P4.jpg" alt="Item 6">
                  <h4>Urna ac diam</h4>
                  <h6>$65.00</h6>
                </div>
              </a>
              <a href="single-product.html">
                <div class="featured-item">
                  <img height="240px"  src="assets/images/P5.jpg" alt="Item 7">
                  <h4>Proin eget imperdiet</h4>
                  <h6>$75.00</h6>
                </div>
              </a>
              <a href="single-product.html">
                <div class="featured-item">
                  <img height="240px" src="assets/images/P6.jpg" alt="Item 8">
                  <h4>Nullam risus nisl</h4>
                  <h6>$85.00</h6>
                </div>
              </a>
              <a href="single-product.html">
                <div class="featured-item">
                  <img height="240px"src="assets/images/p7.jpg" alt="Item 9">
                  <h4>Cras tempus</h4>
                  <h6>$95.00</h6>
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
    


  </body>

</html>

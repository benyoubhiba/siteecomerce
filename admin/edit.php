
  <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin</title>
	


	<link href="css/s.css" rel="stylesheet">
	
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style-nav.css">
	

</head>
<body>
<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5">
		  		<a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images/logo.jpg);"></a>
	        <ul class="list-unstyled components mb-5">
	          <li >
	          <a href="admin.php">Dashboard</a>
	           
	          </li>
	          <li class="active">
	              <a href="home.php">TS-profile</a>
	          </li>
	          <li>
              <a href="tickets.php">Tickets</a>
              
	          </li>
	          <li>
              <a href="logout.php">Logout</a>
	          </li>
	        
	        </ul>

	        <div class="footer">
	        	<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	<a href="home.php" target="_blank">diamonda.com</a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	        </div>

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
            
                <li class="nav-item">
                LOGO
                </li>
               
              </ul>
            </div>
          </div>
        </nav>
      <div class="container-fluid">
    <div class="card shadow md-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-blod text-primary"> Edit Ts Profile </h6>
        </div>
        <div class="card-body">
            <?php

            $connection = mysqli_connect("localhost","root","","siteecomerce");

                if(isset($_POST['edit_btn']))
                {
                    $id = $_POST['edit_id'];
                    $query = "SELECT * FROM users WHERE id='$id' ";
                    $query_run = mysqli_query($connection,$query);
                
                    foreach($query_run as $row)
                    {
                        ?>
           <form action="code.php" method ="POST">
            <input type="hidden" name="edit_id"  value="<?php echo $row['id'] ?>">
            <div class="form-group">
                <label >Username</label>
                <input type="text" name="edit_username" value="<?php echo $row['username'] ?>" class="form-control" placeholder="Enter Username">
              </div>
            <div class="form-group">
                <label >Email</label>
                <input type="email" name="edit_email" value="<?php echo $row['email'] ?>" class="form-control" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label >Password</label>
                <input type="password" name="edit_password" value="<?php echo $row['password'] ?>" class="form-control" placeholder="Enter Password">
            </div>
                <a href="home.php" class="btn btn-danger"> Cancel </a>
            <button type="submit" name="updatebtn" class="btn btn-primary"> Update </button>
             </form>

            <?php
                    }
                }
                
            ?>
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
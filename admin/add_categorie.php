<!DOCTYPE html>
<html>
<head>
<style>
    <?php include ('style.css');?> 
</style>


</head>

<body>
<?php
 require('function.php');
 $con=mysqli_connect("localhost","root","","siteecomerce");

$categorie='';

if (isset($_GET['id']) && $_GET['id']!=''){

    $id=mysqli_real_escape_string($con,$_GET['id']);
    $res=mysqli_query($con,"select *from categorie where id='$id'");
    $row=mysqli_fetch_assoc($res);
    $categorie=$row['categorie'];
   
    }
    


if (isset($_POST['submit'])){
    $categorie= mysqli_real_escape_string($con,$_POST['categorie']);
    if (isset($_GET['id']) && $_GET['id']!=''){
        mysqli_query($con,"update categorie set categorie='$categorie' where id='$id'");
    }else{
   mysqli_query($con,"insert into categorie(categorie,status)values('$categorie','1')");
  
} 
header('location:categories.php');
   die();

  
}



?>
<form class="box" action="" method="post">

    <h1 class="box-title">Categorie</h1>
                            <input type="hidden" name="edit_id" >
	<input type="text" class="box-input" name="categorie" placeholder="Categorie_name" required value="<?php echo $categorie;?>"  />
  
    <input type="submit" name="submit" value="submit" class="box-button" />
</form>


</body>
</html>

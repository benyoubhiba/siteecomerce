<!DOCTYPE html>
<html>
<head>


<style>
    <?php include ('style.css');?> 
</style>

</head>
<body  >
<?php
 require('function.php');
 $con=mysqli_connect("localhost","root","","siteecomerce");
 $categorie_id='';
 $name='';
 $mrp='';
 $price='';
 $qty='';
 $image='';
 $short_desc	='';
 $description	='';
 $meta_title	='';
 $meta_desc	='';
 $meta_keyword='';
$msg='';
$image_required='required';
 if (isset($_GET['id']) && $_GET['id']!=''){
    $image_required='';
    $id=get_safe_value($con,$_GET['id']);
    $res=mysqli_query($con,"select * from product where id='$id'");
	$check=mysqli_num_rows($res);
    if($check>0){
        $row=mysqli_fetch_assoc($res);
		$categories_id=$row['categories_id'];
		$name=$row['name'];
		$mrp=$row['mrp'];
		$price=$row['price'];
		$qty=$row['qty'];
		$short_desc=$row['short_desc'];
		$description=$row['description'];
		$meta_title=$row['meta_title'];
		$meta_desc=$row['meta_desc'];
		$meta_keyword=$row['meta_keyword'];
}else{
    header('location:product.php');
    die();
} 

    }

 
if (isset($_POST['submit'])){
    $categorie_id=get_safe_value($con,$_POST['categorie_id']);
    $name=get_safe_value($con,$_POST['name']);
	$mrp=get_safe_value($con,$_POST['mrp']);
	$price=get_safe_value($con,$_POST['price']);
	$qty=get_safe_value($con,$_POST['qty']);
	$short_desc=get_safe_value($con,$_POST['short_desc']);
	$description=get_safe_value($con,$_POST['description']);
	$meta_title=get_safe_value($con,$_POST['meta_title']);
	$meta_desc=get_safe_value($con,$_POST['meta_desc']);
	$meta_keyword=get_safe_value($con,$_POST['meta_keyword']);
    $res=mysqli_query($con,"select * from product where name='$name'");
	$check=mysqli_num_rows($res);
    if($check>0){
        if (isset($_GET['id']) && $_GET['id']!=''){
            $getData=mysqli_fetch_assoc($res);
            if($id==$getData['id']){

            }else{
                $msg="product already exit";
          
            }
        }
    }


   
    if($msg==''){
        if($_FILES['image']['name']!=''){
            $image=rand(111111111,999999999).'_'.$_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'],PRODUCT_IMAGE_SERVER_PATH.$image);
            $update_sql="update product set categories_id='$categories_id',name='$name',mrp='$mrp',price='$price',qty='$qty',short_desc='$short_desc',description='$description',meta_title='$meta_title',meta_desc='$meta_desc',meta_keyword='$meta_keyword',image='$image' where id='$id'";
        }else{
        $image=rand(1111111111,999999999).'_'.$_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'],'../assets/images/'.$image);
        mysqli_query($con,"insert into product(categories_id,name,mrp,price,qty,short_desc,description,meta_title,meta_desc,meta_keyword,status,image) values('$categories_id','$name','$mrp','$price','$qty','$short_desc','$description','$meta_title','$meta_desc','$meta_keyword',1,'$image')");
    }
    header('location:product.php');
       die();
    
      
    }

}

?>
<form class="box" action="" method="post">

    <h1 class="box-title">Product</h1>
                            <select name="categorie_id" class="box-input" id="">
<option value="">Select Categories</option>
<?php
$res=mysqli_query($con,"select id,categorie from categorie order by categorie asc");
while ($row=mysqli_fetch_assoc($res)) {
   echo"<option value=".$row['categorie'].">".$row['categorie']."</option>";

}
?> 
   </select>
	
    <input type="text" class="box-input" name="name" placeholder="product_name" required value="<?php echo $name;?>"  />
    <input type="text" class="box-input" name="mrp" placeholder="mrp" required value="<?php echo $mrp;?>"  />
    <input type="text" class="box-input" name="price" placeholder="price" required value="<?php echo $price;?>"  />
    <input type="text" class="box-input" name="qty" placeholder="qty" required value="<?php echo $qty;?>"  />
    <input type="file" class="box-input" name="image"  required   />
    <input type="text" class="box-input" name="short_desc" placeholder="short_desc" required value="<?php echo $short_desc;?>"  />
    <textarea type="text" class="box-input" name="description" placeholder="description" required value="<?php echo $description;?>">  </textarea >
    <input type="text" class="box-input" name="meta_title" placeholder="meta_title" required value="<?php echo $meta_title;?>"  />
    <input type="text" class="box-input" name="meta_desc" placeholder="meta_desc" required value="<?php echo $meta_desc;?>"  />

    <input type="text" class="box-input" name="meta_keyword" placeholder="meta_keyword" required value="<?php echo $meta_keyword;?>"  />
    <input type="submit" name="submit" value="submit" class="box-button" />
</form>


</body>
</html>

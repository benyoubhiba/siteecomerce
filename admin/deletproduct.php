
<?php
    $connection = mysqli_connect("localhost","root","","siteecomerce");
    $query = "SELECT * FROM product";
    $query_run = mysqli_query($connection,$query);
if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];
    $query = "DELETE FROM product WHERE id='$id'";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
        {
        
            $_SESSION['success'] = "Your Data is Deleted";
            header('Location:product.php');
        }
        else
        {
            
            $_SESSION['status'] = "Your Data is NOT Deleted";
            header('Location: product.php');
        }
}
?>

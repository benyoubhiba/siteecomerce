<?php
    $connection = mysqli_connect("localhost","root","","siteecomerce");
    $query = "SELECT * FROM  categorie";
    $query_run = mysqli_query($connection,$query);
if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];
    $query = "DELETE FROM categorie WHERE id='$id'";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
        {
        
            $_SESSION['success'] = "Your Data is Deleted";
            header('Location: categories.php');
        }
        else
        {
            
            $_SESSION['status'] = "Your Data is NOT Deleted";
            header('Location:categories.php');
        }
}
?>
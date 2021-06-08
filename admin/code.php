<?php
session_start(); 

$connection = mysqli_connect("localhost","root","","siteecomerce");
if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];

    $query = "UPDATE users SET username='$username', email='$email', password='$password' WHERE id='$id'";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
        {
          
            $_SESSION['success'] = "Your Data is Updated";
            header('Location: home.php');
        }
        else
        {
           
            $_SESSION['status'] = "Your Data is NOT Updated";
            header('Location:home.php');
        }

}?>

<?php
require('../config.php');

if (isset($_REQUEST['name'], $_REQUEST['price'], $_REQUEST['discription'], $_REQUEST['taille'])){
	// récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
	$name = stripslashes($_REQUEST['name']);
	$name = mysqli_real_escape_string($conn, $name); 
	// récupérer l'email et supprimer les antislashes ajoutés par le formulaire
	$price = stripslashes($_REQUEST['price']);
	$price = mysqli_real_escape_string($conn, $price);
	// récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
	$discription = stripslashes($_REQUEST['discription']);
	$discription = mysqli_real_escape_string($conn, $discription);
	// récupérer le type (user | admin)
	$taille = stripslashes($_REQUEST['taille']);
	$taille = mysqli_real_escape_string($conn, $taille);
	
    $query = "INSERT into `products` (name, price,discription, taille)
				  VALUES ('$name', '$price', '$taille', ' $discription'";
    $res = mysqli_query($conn, $query);

    if($res){
       echo "<div class='status'>
             <h3>L'utilisateur a été créée avec succés.</h3>
             <p>Cliquez <a href='home.php'>ici</a> pour retourner à la page d'accueil</p>
			 </div>";
    }
}else{
?>




<form class="box" action="" method="post">
	
    <h1 class="box-title">Add posts</h1>
	<input type="text" class="box-input" name="name" placeholder="Nom du posts" required />
    <input type="text" class="box-input" name="price" placeholder="price" required />
    <input type="text" class="box-input" name="discription" placeholder="dicription" required />
    <input type="text" class="box-input" name="taille" placeholder="taille" required />
    <input type="submit" name="submit" value="+ Add" class="box-button" />
</form>
<?php } ?>
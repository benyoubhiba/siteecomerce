<?php

class categorie_controller{
public function getALLcategorie(){

$categorie = category::getAll();
return $categorie
}   
}
?>
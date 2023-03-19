<?php

class Categorie{
    public $categorie_name;

    public function getAllCategories(){
        require("connexion.php");
        $sql = "SELECT * FROM categorie";
        $stm = $connexion->prepare($sql);
        $stm->execute();
        $listCategories = $stm->fetchAll();
        return $listCategories;
    }
}



?>
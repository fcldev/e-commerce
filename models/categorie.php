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

    public function getCategorie($categorieName){
        require("connexion.php");
        $sql = "SELECT * FROM categorie WHERE categorie_name = :categorieName";
        $stm = $connexion->prepare($sql);
        $stm->bindParam(":categorieName",$categorieName);
        $stm->execute();
        $listCategories = $stm->fetchAll();
        return $listCategories;
    }

    public function deleteCategorie($categorieName){
        require("connexion.php");
        $sql = "DELETE FROM `categorie` WHERE categorie_name = :categorieName";
        $stm = $connexion->prepare($sql);
        $stm->bindParam(":categorieName",$categorieName);
        $stm->execute();
    }

    function setCategorieInfo($categorieName){
        $this->categorie_name = $categorieName;
    }

    function addCategorie(){
        require("connexion.php");
        $sql = "INSERT INTO `categorie`(`categorie_name`) VALUES (:categorieName)";
        $stm = $connexion->prepare($sql);
        $stm->bindParam(":categorieName",$this->categorie_name);
        $stm->execute();
    }

    function alterCategorieInfo($categorieName){
        require("connexion.php");
        $sql = "UPDATE `categorie` SET `categorie_name`=:categorieName WHERE categorie_name = :id";
        $stm = $connexion->prepare($sql);
        $stm->bindParam(":id",$categorieName);
        $stm->bindParam(":categorieName",$this->categorie_name);
        $stm->execute();
    }


}
?>
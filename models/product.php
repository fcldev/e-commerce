<?php


class Product{
    public $idProduct;
    public $name;
    public $description;
    public $tags;
    public $price;
    public $video;
    public $quantity;
    public $visibility;
    public $date_arrivale;
    public $sizes_Available;
    public $discount;
    public $categorie_name;

    public function getAllProducts(){
        require("connexion.php");
        $sql = "SELECT * FROM product";
        $stm = $connexion->prepare($sql);
        $stm->execute();
        $listProducts = $stm->fetchAll();
        return $listProducts;
    }
    public function getProductById($idProduct){
        require("connexion.php");
        $sql = "SELECT * FROM product WHERE id_product = :idProduct";
        $stm = $connexion->prepare($sql);
        $stm->bindParam(":idProduct",$idProduct);
        $stm->execute();
        $listProducts = $stm->fetchAll();
        return $listProducts;
    }
    public function getProducts($inpVal){
        require("connexion.php");
        $sql = "SELECT * FROM product WHERE name LIKE '%:inpVal%' OR tags LIKE '%:inpVal%' OR sizes_available LIKE '%:inpVal%' OR description LIKE '%:inpVal%' OR categorie_name LIKE '%:inpVal%'";
        $stm = $connexion->prepare($sql);
        $stm->bindParam(":inpVal",$inpVal);
        $stm->execute();
        $listProducts = $stm->fetchAll();
        return $listProducts;
    }

    public function getProductsByCategorie($categorie){
        require("connexion.php");
        $sql = "SELECT * FROM product WHERE categorie_name = :categorie";
        $stm = $connexion->prepare($sql);
        $stm->bindParam(":categorie",$categorie);
        $stm->execute();
        $listProducts = $stm->fetchAll();
        return $listProducts;
    }
    
    public function alterProductQuantity($id_quantity,$quantity){
        require("connexion.php");
        $sql = "ALTER TABLE product set quantity = quantity - $quantity WHERE id_product = $id_product";
        $stm = $connexion->prepare($sql);
        $stm->execute();
    }

}

?>
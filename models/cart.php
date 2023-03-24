<?php


class Cart{
    public $id_order;
    public $id_user;
    public $id_product;
    public $quantity;
    public $state;


    public function checkProduct($id_user,$id_product){
        require("connexion.php");
        $sql = "SELECT * FROM `cart` WHERE id_user = :id_user AND id_product = :id_product";
        $stm = $connexion->prepare($sql);
        $stm->bindParam(':id_user',$id_user);
        $stm->bindParam(':id_product',$id_product);
        $stm->execute();
        $listProducts = $stm->fetchAll();
        return $listProducts;
    }

    public function insceaseQuantity($id_user,$id_product){
        require("connexion.php");
        $sql = "UPDATE `cart` SET quantity = quantity + 1 WHERE id_user = :id_user AND id_product = :id_product";
        $stm = $connexion->prepare($sql);
        $stm->bindParam(':id_user',$id_user); 
        $stm->bindParam(':id_product',$id_product);
        $stm->execute();
    }
    public function setState($state,$id_cart){
        require("connexion.php");
        $sql = "UPDATE `cart` SET state = :state WHERE id_cart = :id_cart";
        $stm = $connexion->prepare($sql);
        $stm->bindParam(':id_cart',$id_cart);
        $stm->bindParam(':state',$state);
        $stm->execute();
    }
    
    public function addToCart($id_user,$id_product,$quantity,$state){
        require("connexion.php");
        $sql = "INSERT INTO `cart`(`id_cart`, `id_user`, `id_product`, `quantity`, `state`) VALUES (default,:id_user,:id_product,:quantity,:state)";
        $stm = $connexion->prepare($sql);
        $stm->bindParam(':id_user',$id_user);
        $stm->bindParam(':id_product',$id_product);
        $stm->bindParam(':quantity',$quantity);
        $stm->bindParam(':state',$state);
        $stm->execute();
    }
    
    public function deleteFromCart($id_cart){
        require("connexion.php");
        $sql = "DELETE FROM `cart` WHERE id_cart = :id_cart";
        $stm = $connexion->prepare($sql);
        $stm->bindParam(':id_cart',$id_cart);
        $stm->execute();
    }

}

?>



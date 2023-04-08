<?php


class Cart{
    public $id_order;
    public $id_user;
    public $id_product;
    public $quantity;
    public $state;

    public function getCartProducts($idUser){
        require("connexion.php");
        $sql = "SELECT * FROM `cart` WHERE id_user = :id_user AND state = 0";
        $stm = $connexion->prepare($sql);
        $stm->bindParam(':id_user',$idUser);
        $stm->execute();
        $listProducts = $stm->fetchAll();
        return $listProducts;
    }

    public function checkProduct($id_user,$id_product){
        require("connexion.php");
        $sql = "SELECT * FROM `cart` WHERE id_user = :id_user AND id_product = :id_product AND state = 0";
        $stm = $connexion->prepare($sql);
        $stm->bindParam(':id_user',$id_user);
        $stm->bindParam(':id_product',$id_product);
        $stm->execute();
        $listProducts = $stm->fetchAll();
        return $listProducts;
    }
    public function getCartCount($id_user){
        require("connexion.php");
        $sql = "SELECT * FROM `cart` WHERE id_user = :id_user AND state = 0";
        $stm = $connexion->prepare($sql);
        $stm->bindParam(':id_user',$id_user);
        $stm->execute();
        $listProducts = $stm->fetchAll();
        return count($listProducts);
    }

    public function increaseQuantity($id_user,$id_product,$quantity){
        require("connexion.php");
        $sql = "UPDATE `cart` SET quantity = quantity + :quantity WHERE id_user = :id_user AND id_product = :id_product AND state = 0";
        $stm = $connexion->prepare($sql);
        $stm->bindParam(':id_user',$id_user); 
        $stm->bindParam(':id_product',$id_product);
        $stm->bindParam(':quantity',$quantity);
        $stm->execute();
    }

    public function changeCartQuantity($id_user,$id,$quantity){
        require("connexion.php");
        $sql = "UPDATE `cart` SET quantity = :quantity WHERE id_user = :id_user AND id_product = :id_product AND state = 0";
        $stm = $connexion->prepare($sql);
        $stm->bindParam(':id_user',$id_user); 
        $stm->bindParam(':id_product',$id);
        $stm->bindParam(':quantity',$quantity); 
        $stm->execute();
    }
    public function changeCartColor($id_user,$id,$color){
        require("connexion.php");
        $sql = "UPDATE `cart` SET color = :color WHERE id_user = :id_user AND id_product = :id_product AND state = 0";
        $stm = $connexion->prepare($sql);
        $stm->bindParam(':id_user',$id_user); 
        $stm->bindParam(':id_product',$id);
        $stm->bindParam(':color',$color); 
        $stm->execute();
    }
    public function changeCartSize($id_user,$id,$size){
        require("connexion.php");
        $sql = "UPDATE `cart` SET size = :size WHERE id_user = :id_user AND id_product = :id_product AND state = 0";
        $stm = $connexion->prepare($sql);
        $stm->bindParam(':id_user',$id_user); 
        $stm->bindParam(':id_product',$id);
        $stm->bindParam(':size',$size); 
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

    public function deleteFromCart($id_product,$id_user){
        require("connexion.php");
        $sql = "DELETE FROM `cart` WHERE id_product = :id_product AND id_user = :id_user AND state = 0";
        $stm = $connexion->prepare($sql);
        $stm->bindParam(':id_product',$id_product);
        $stm->bindParam(':id_user',$id_user);
        $stm->execute();
    }
    public function clearCart($id_user){
        require("connexion.php");
        $sql = "DELETE FROM `cart` WHERE id_user = :id_user AND state = 0";
        $stm = $connexion->prepare($sql);
        $stm->bindParam(':id_user',$id_user);
        $stm->execute();
    }
    public function setIdOrder($idCart,$idOrder){
        require("connexion.php");
        $sql = "UPDATE `cart` SET `id_order`= :id_order ,`state`= 1 WHERE id_cart = :id_cart";
        $stm = $connexion->prepare($sql);
        $stm->bindParam(':id_cart',$idCart);
        $stm->bindParam(':id_order',$idOrder);
        $stm->execute();
    }
}

?>



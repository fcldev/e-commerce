<?php

class Delivery{

    public $side;
    public $dilevreyPrice;


    public function getAllSides(){
        require("connexion.php");
        $sql = "SELECT * FROM `delivery`";
        $stm = $connexion->prepare($sql);
        $stm->execute();
        $listSides = $stm->fetchAll();
        return $listSides;
    }
    public function getSide($side){
        require("connexion.php");
        $sql = "SELECT * FROM `delivery` WHERE side = :side";
        $stm = $connexion->prepare($sql);
        $stm->bindParam(":side",$side);
        $stm->execute();
        $side = $stm->fetchAll();
        return $side;
    }
    public function getSides($inpVal){
        require("connexion.php");
        $sql = "SELECT * FROM delivery WHERE side LIKE '%$inpVal%' OR price LIKE '%$inpVal%'";
        $stm = $connexion->prepare($sql);
        $stm->bindParam(":inpVal",$inpVal);
        $stm->execute();
        $listSides = $stm->fetchAll();
        return $listSides;
    }
    public function setSideInfo($side,$price){
        $this->side = $side;
        $this->price = $price;
    }
    public function addSide(){
        require("connexion.php");
        $sql = "INSERT INTO `delivery`(`side`, `price`) VALUES (:side,:price)";
        $stm = $connexion->prepare($sql);
        $stm->bindParam(":side",$this->side);
        $stm->bindParam(":price",$this->price);
        $stm->execute();
    }
    public function alterSide(){
        require("connexion.php");
        $sql = "UPDATE `delivery` SET side = :side, price = :price ";
        $stm = $connexion->prepare($sql);
        $stm->bindParam(":side",$this->side);
        $stm->bindParam(":price",$this->price);
        $stm->execute();
    }
    public function deleteSide($side){
        require("connexion.php");
        $sql = "DELETE FROM `delivery` WHERE side = :side";
        $stm = $connexion->prepare($sql);
        $stm->bindParam(":side",$side);
        $stm->execute();
    }
}


?>
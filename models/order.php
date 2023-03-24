<?php 

class Order{
    public $id_order;
    public $id_user;
    public $id_product;
    public $quantity;

    public function setOrderInfo($idOrder,$idUser,$idProduct,$quantity,$state){
        $this->id_order= $idOrder;
        $this->id_user= $idUser;
        $this->id_product= $idProduct;
        $this->quantity= $quantity;
        $this->state= $state;
    }

    public function validateOrder(){
        require("connexion.php");
        $sql = "";
        $stm = $connexion->prepare($sql);
        $stm->execute();
    }  
}




?>
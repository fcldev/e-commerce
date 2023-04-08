<?php 

class Order{
    public $id_user;
    public $firstName;
    public $lastName;
    public $adress1;
    public $adress2;
    public $city;
    public $email;
    public $phone;
    public $paymentMethod;
    public $dateValidation;
    public $total;

    public function getAllOrders(){
        require("connexion.php");
        $sql = "SELECT * FROM `order`";
        $stm = $connexion->prepare($sql);
        $stm->execute();
        $listOrders = $stm->fetchAll();
        return $listOrders;
    }

    public function getOrder($idOrder){
        require("connexion.php");
        $sql = "SELECT * FROM `order` WHERE id_order = :id_order";
        $stm = $connexion->prepare($sql);
        $stm->bindParam(":id_order",$idOrder);
        $stm->execute();
        $listOrders = $stm->fetchAll();
        return $listOrders;
    }

    public function getOrders($inpVal){
        require("connexion.php");
        $sql = "SELECT * FROM `order` WHERE id_order LIKE '%$inp_val%' OR date_validation LIKE '%$inp_val%'";
        $stm = $connexion->prepare($sql);
        $stm->bindParam(":inp_val",$inpVal);
        $stm->execute();
        $listOrders = $stm->fetchAll();
        return $listOrders;
    }

    public function deleteOrder($idOrder){
        require("connexion.php");
        $sql = "DELETE FROM `order` WHERE id_order = :id_order";
        $stm = $connexion->prepare($sql);
        $stm->bindParam(":id_order",$idOrder);
        $stm->execute();
        $listOrders = $stm->fetchAll();
        return $listOrders;
    }

    public function setOrderInfo($fName,$lName,$adress1,$adress2,$city,$phone,$email,$note,$idUser,$date,$paiment,$total){
        $this->id_user = $idUser;
        $this->firstName = $fName;
        $this->lastName = $lName;
        $this->adress1 = $adress1;
        $this->adress2 = $adress2;
        $this->city = $city;
        $this->email = $email;
        $this->phone = $phone;
        $this->paymentMethod = $paiment;
        $this->dateValidation = $date;
        $this->total = $total;
    } 

    public function createOrder(){
        require("connexion.php");
        $sql = "INSERT INTO `order`(`id_order`, `id_user`, `first_name`, `last_name`, `adress1`, `adress2`, `city`, `email`, `phone`, `payment_method`, `date_validation`, `total`) VALUES (default,:id_user,:first_name,:last_name,:adress1,:adress2,:city,:email,:phone,:payment_method,:date_validation,:total)";
        $stm = $connexion->prepare($sql);
        $stm->bindParam(":id_user",$this->id_user);
        $stm->bindParam(":first_name",$this->firstName);
        $stm->bindParam(":last_name",$this->lastName);
        $stm->bindParam(":adress1",$this->adress1);
        $stm->bindParam(":adress2",$this->adress2);
        $stm->bindParam(":city",$this->city);
        $stm->bindParam(":email",$this->email);
        $stm->bindParam(":phone",$this->phone);
        $stm->bindParam(":payment_method",$this->paymentMethod);
        $stm->bindParam(":date_validation",$this->dateValidation);
        $stm->bindParam(":total",$this->total);
        $stm->execute();
    }  

    public function setOrderStatusInfo($status){
        $this->status = $status;
    } 

    public function alterOrderStatus($idOrder){
        require("connexion.php");
        $sql = "";
        $stm = $connexion->prepare($sql);
        $stm->bindParam(":id_order",$idOrder);
        $stm->execute();
    }  
}




?>
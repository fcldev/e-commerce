<?php

class Review{
    public $id_review;
    public $id_user;
    public $id_product;
    public $review;

    public function addEvaluation($idUser,$idProduct,$evaluation){
        require("connexion.php");
        $sql = "INSERT INTO `review`(`id_review`, `id_user`, `id_product`,`evaluation`) VALUES (default,:id_user,:id_product,:evaluation)";
        $stm = $connexion->prepare($sql);
        $stm->bindParam(":id_user",$idUser);
        $stm->bindParam(":id_product",$idProduct);
        $stm->bindParam(":evaluation",$evaluation);
        $stm->execute();
    }
    public function checkEvaluation($idUser,$idProduct){
        require("connexion.php");
        $sql = "SELECT * FROM `review` WHERE id_user = :id_user AND id_product = :id_product";
        $stm = $connexion->prepare($sql);
        $stm->bindParam(":id_user",$idUser);
        $stm->bindParam(":id_product",$idProduct);
        $stm->execute();
        $listR = $stm->fetchAll();
        return $listR;
    }
    public function getAllEvaluations($idProduct){
        require("connexion.php");
        $sql = "SELECT evaluation FROM `review` WHERE id_product = :id_product";
        $stm = $connexion->prepare($sql);
        $stm->bindParam(":id_product",$idProduct);
        $stm->execute();
        $listR = $stm->fetchAll();
        return $listR;
    }
    public function alterEvaluation($idUser,$idProduct,$evaluation){
        require("connexion.php");
        $sql = "UPDATE `review` SET `evaluation`= :evaluation WHERE id_user = :id_user AND id_product = :id_product";
        $stm = $connexion->prepare($sql);
        $stm->bindParam(":id_user",$idUser);
        $stm->bindParam(":id_product",$idProduct);
        $stm->bindParam(":evaluation",$evaluation);
        $stm->execute();
    }
}

?>
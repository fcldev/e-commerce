<?php

class Comment{
    public $id_user;
    public $id_product;
    public $comment;

    public function getComments($idProduct){
        require("connexion.php");
        $sql = "SELECT c.id_comment, c.id_product, c.date, c.comment, u.id_user ,u.full_name , r.evaluation , u.profile_image FROM comment c INNER JOIN user u ON c.id_user = u.id_user LEFT JOIN review r ON u.id_user = r.id_user WHERE c.id_product = :id_product";
        $stm = $connexion->prepare($sql);
        $stm->bindParam(":id_product",$idProduct);
        $stm->execute();
        $listComments = $stm->fetchAll();
        return $listComments;
    }
    public function addComment($idUser,$idProduct,$date,$comment){
        require("connexion.php");
        $sql = "INSERT INTO `comment`(`id_comment`, `id_user`, `id_product`, `date`,`comment`) VALUES (default,:id_user,:id_product,:date,:comment)";
        $stm = $connexion->prepare($sql);
        $stm->bindParam(":id_user",$idUser);
        $stm->bindParam(":id_product",$idProduct);
        $stm->bindParam(":date",$date);
        $stm->bindParam(":comment",$comment);
        $stm->execute();
    }

    public function deleteComment($idComment){
        require("connexion.php");
        $sql = "DELETE FROM `comment` WHERE id_comment = :id_comment";
        $stm = $connexion->prepare($sql);
        $stm->bindParam(":id_comment",$idComment);
        $stm->execute();
    }

}
<?php


class Image{
    public $id_image;
    public $id_product;
    public $image_url;

    public function getImagesByProductId($idProduct){
        require("connexion.php");
        $sql = "SELECT * FROM image WHERE id_product = :id_product";
        $stm = $connexion->prepare($sql);
        $stm->bindParam(":id_product",$idProduct);
        $stm->execute();
        $listImages = $stm->fetchAll();
        return $listImages;
    }

    public function deleteImage($idImage){
        require("connexion.php");
        $sql = "DELETE FROM image WHERE id_image = :id_image";
        $stm = $connexion->prepare($sql);
        $stm->bindParam(":id_image",$idImage);
        $stm->execute();
    }
    function addImage($idProduct,$imageUrl,$index){
        require("connexion.php");
        $sql = "INSERT INTO `image`(`id_image`, `id_product`, `image_url`,`index`) VALUES (default,:id_product,:image_url,:index)";
        $stm = $connexion->prepare($sql);
        $stm->bindParam(":id_product",$idProduct);
        $stm->bindParam(":image_url",$imageUrl);
        $stm->bindParam(":index",$index);
        $stm->execute();
    }

}

?>
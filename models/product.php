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
    public $colors;
    public $discount;
    public $categorie_name;
    public $general_image;

    public function getAllProducts(){
        require("connexion.php");
        $sql = "SELECT DISTINCT p.*, m.id_image,m.image_url,m.index FROM product p LEFT JOIN image m ON p.id_product = m.id_product AND m.index = 1 WHERE p.visibility = 1";
        $stm = $connexion->prepare($sql);
        $stm->execute();
        $listProducts = $stm->fetchAll();
        return $listProducts;
    }
    public function getProductsOrderedByDiscount(){
        require("connexion.php");
        $sql = "SELECT DISTINCT * FROM `categorie` c INNER JOIN product p ON c.categorie_name = p.categorie_name LEFT JOIN image m on p.id_product = m.id_product  AND m.index = 1 ORDER BY `p`.`discount`  DESC";
        $stm = $connexion->prepare($sql);
        $stm->execute();
        $listProducts = $stm->fetchAll();
        return $listProducts;
    }
    public function getProductsOrderedByDate(){
        require("connexion.php");
        $sql = "SELECT DISTINCT * FROM `categorie` c INNER JOIN product p ON c.categorie_name = p.categorie_name LEFT JOIN image m on p.id_product = m.id_product  AND m.index = 1 ORDER BY p.date_arrivale ASC";
        $stm = $connexion->prepare($sql);
        $stm->execute();
        $listProducts = $stm->fetchAll();
        return $listProducts;
    }
    public function getProductById($idProduct){
        require("connexion.php");
        $sql = "SELECT DISTINCT p.*, m.id_image,m.image_url,m.index FROM product p LEFT JOIN image m ON p.id_product = m.id_product AND m.index = 1 AND  p.id_product = :idProduct";
        // $sql = "SELECT * FROM product WHERE id_product = :idProduct";
        $stm = $connexion->prepare($sql);
        $stm->bindParam(":idProduct",$idProduct);
        $stm->execute();
        $listProducts = $stm->fetchAll();
        return $listProducts;
    }
    
    public function getProducts($inpVal){
        require("connexion.php");
        $sql = "SELECT * FROM product WHERE name LIKE '%$inpVal%' OR tags LIKE '%$inpVal%' OR sizes_available LIKE '%$inpVal%' OR description LIKE '%$inpVal%' OR categorie_name LIKE '%$inpVal%'";
        $stm = $connexion->prepare($sql);
        $stm->bindParam(":inpVal",$inpVal);
        $stm->execute();
        $listProducts = $stm->fetchAll();
        return $listProducts;
    }

    public function getProductsByCategorie($categorie){
        require("connexion.php");
        $sql = "SELECT DISTINCT p.*, m.id_image,m.image_url,m.index FROM product p LEFT JOIN image m ON p.id_product = m.id_product AND m.index = 1 WHERE p.visibility > 0 AND categorie_name = :categorie ";
        $stm = $connexion->prepare($sql);
        $stm->bindParam(":categorie",$categorie);
        $stm->execute();
        $listProducts = $stm->fetchAll();
        return $listProducts;
    }
    public function searshForProducts($input_val){
        require("connexion.php");
        $sql = "SELECT * FROM product WHERE id_product LIKE '%$input_val%' OR name LIKE '%$input_val%'";
        $stm = $connexion->prepare($sql);
        $stm->bindParam(":input_val",$input_val);
        $stm->execute();
        $listProducts = $stm->fetchAll();
        return $listProducts;
    }
    
    public function deleteProduct($idProduct){
        require("connexion.php");
        $sql = "DELETE FROM `product` WHERE id_product = :idProduct";
        $stm = $connexion->prepare($sql);
        $stm->bindParam(":idProduct",$idProduct);
        $stm->execute();
    }
    
    public function alterProductQuantity($id_quantity,$quantity){
        require("connexion.php");
        $sql = "ALTER TABLE product set quantity = quantity - $quantity WHERE id_product = $id_product";
        $stm = $connexion->prepare($sql);
        $stm->execute();
    }

    function setProductInfo($name,$description,$tags,$price,$video,$quantity,$visibility,$date_arrivale,$sizes_available,$colors,$discount,$categorie_name){
        $this->name = $name;
        $this->description = $description;
        $this->tags = $tags;
        $this->price = $price;
        $this->video = $video;
        $this->quantity = $quantity;
        $this->visibility = $visibility;
        $this->date_arrivale = $date_arrivale;
        $this->sizes_available = $sizes_available;
        $this->colors = $colors;
        $this->discount = $discount;
        $this->categorie_name = $categorie_name;
    }

    function addProduct(){
        require("connexion.php");
        $sql = "INSERT INTO `product`(`id_product`, `name`, `description`, `tags`, `price`, `video`, `quantity`, `visibility`, `date_arrivale`, `sizes_available`, `colors`, `discount`, `categorie_name` , `evaluation`) VALUES (default,:name,:description,:tags,:price,:video,:quantity,:visibility,:date_arrivale,:sizes_available,:colors,:discount,:categorie_name,0)";
        $stm = $connexion->prepare($sql);
        $stm->bindParam(":name",$this->name);
        $stm->bindParam(":description",$this->description);
        $stm->bindParam(":tags",$this->tags);
        $stm->bindParam(":price",$this->price);
        $stm->bindParam(":video",$this->video);
        $stm->bindParam(":quantity",$this->quantity);
        $stm->bindParam(":visibility",$this->visibility);
        $stm->bindParam(":date_arrivale",$this->date_arrivale);
        $stm->bindParam(":sizes_available",$this->sizes_available);
        $stm->bindParam(":colors",$this->colors);
        $stm->bindParam(":discount",$this->discount);
        $stm->bindParam(":categorie_name",$this->categorie_name);
        $stm->execute();
    }

    function alterProductInfo($id_product){
        require("connexion.php");
        $sql = "UPDATE `product` SET `name`=:name,`description`=:description,`tags`=:tags,`price`=:price,`video`=:video,`quantity`=:quantity,`visibility`=:visibility,`date_arrivale`=:date_arrivale,`sizes_available`=:sizes_available,`colors`=:colors,`discount`=:discount,`categorie_name`=:categorie_name WHERE id_product = :id_product";
        $stm = $connexion->prepare($sql);
        $stm->bindParam(":id_product",$id_product);
        $stm->bindParam(":name",$this->name);
        $stm->bindParam(":description",$this->description);
        $stm->bindParam(":tags",$this->tags);
        $stm->bindParam(":price",$this->price);
        $stm->bindParam(":video",$this->video);
        $stm->bindParam(":quantity",$this->quantity);
        $stm->bindParam(":visibility",$this->visibility);
        $stm->bindParam(":date_arrivale",$this->date_arrivale);
        $stm->bindParam(":sizes_available",$this->sizes_available);
        $stm->bindParam(":colors",$this->colors);
        $stm->bindParam(":discount",$this->discount);
        $stm->bindParam(":categorie_name",$this->categorie_name);
        $stm->execute();
    }
    function changeProductEvaluation($idProduct,$evaluation){
        require("connexion.php");
        $sql = "UPDATE `product` SET `evaluation`=:evaluation WHERE id_product = :id_product";
        $stm = $connexion->prepare($sql);
        $stm->bindParam(":evaluation",$evaluation);
        $stm->bindParam(":id_product",$idProduct);
        $stm->execute();
    }

}

?>
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
    public $general_image;

    public function getAllProducts(){
        require("connexion.php");
        $sql = "SELECT * FROM product";
        $stm = $connexion->prepare($sql);
        $stm->execute();
        $listProducts = $stm->fetchAll();
        return $listProducts;
    }
    public function getProductsOrderedByDiscount(){
        require("connexion.php");
        $sql = "SELECT * FROM `categorie` c INNER JOIN product p ON c.categorie_name = p.categorie_name ORDER BY p.discount DESC LIMIT 20";
        $stm = $connexion->prepare($sql);
        $stm->execute();
        $listProducts = $stm->fetchAll();
        return $listProducts;
    }
    public function getProductsOrderedByDate(){
        require("connexion.php");
        $sql = "SELECT * FROM `categorie` c INNER JOIN product p ON c.categorie_name = p.categorie_name ORDER BY p.date_arrivale ASC";
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
    public function getProductsImage($idProduct){
        require("connexion.php");
        $sql = "SELECT general_image FROM product WHERE id_product = :idProduct";
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
        $sql = "SELECT * FROM product WHERE categorie_name = :categorie";
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

    function setProductInfo($name,$description,$tags,$price,$video,$quantity,$visibility,$date_arrivale,$sizes_available,$discount,$categorie_name,$general_image){
        $this->name = $name;
        $this->description = $description;
        $this->tags = $tags;
        $this->price = $price;
        $this->video = $video;
        $this->quantity = $quantity;
        $this->visibility = $visibility;
        $this->date_arrivale = $date_arrivale;
        $this->sizes_available = $sizes_available;
        $this->discount = $discount;
        $this->categorie_name = $categorie_name;
        $this->general_image = $general_image;
    }

    function addProduct(){
        require("connexion.php");
        $sql = "INSERT INTO `product`(`id_product`, `name`, `description`, `tags`, `price`, `video`, `quantity`, `visibility`, `date_arrivale`, `sizes_available`, `discount`, `categorie_name`, `general_image`) VALUES (default,:name,:description,:tags,:price,:video,:quantity,:visibility,:date_arrivale,:sizes_available,:discount,:categorie_name,:general_image)";
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
        $stm->bindParam(":discount",$this->discount);
        $stm->bindParam(":categorie_name",$this->categorie_name);
        $stm->bindParam(":general_image",$this->general_image);
        $stm->execute();
    }

    function alterProductInfo($id_product){
        require("connexion.php");
        $sql = "UPDATE `product` SET `name`=:name,`description`=:description,`tags`=:tags,`price`=:price,`video`=:video,`quantity`=:quantity,`visibility`=:visibility,`date_arrivale`=:date_arrivale,`sizes_available`=:sizes_available,`discount`=:discount,`categorie_name`=:categorie_name,`general_image`=:general_image WHERE id_product = :id_product";
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
        $stm->bindParam(":discount",$this->discount);
        $stm->bindParam(":categorie_name",$this->categorie_name);
        $stm->bindParam(":general_image",$this->general_image);    
        $stm->execute();
    }

}

?>
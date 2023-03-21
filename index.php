<?php
session_start();

$url = $_SERVER['PHP_SELF'];

// client part start
require("./controlleur/client/clientControlleur.php");
if($url == "/Ecommerce/index.php/"){
    accuelle();
}elseif($url == "/Ecommerce/index.php/cart"){
    cart();
}elseif($url == "/Ecommerce/index.php/searsh"){
    searshBar();
}elseif($url == "/Ecommerce/index.php/productDetails"){
    productDetails();
}elseif($url == "/Ecommerce/index.php/loginRegister"){
    loginRegister();
}elseif($url == "/Ecommerce/index.php/confirmLogin"){
    confirmLogin();
}elseif($url == "/Ecommerce/index.php/logout"){
    logout();
}elseif($url == "/Ecommerce/index.php/confirmCreateAcount"){
    confirmCreateAcount();
}
// client part end

// ----------------------------------------------------------------------------------------------------------------------------------------------------------------

// admin part start
require("./controlleur/admin/adminControlleur.php");
// dashboard user part
if($url == "/Ecommerce/index.php/dashboardUser"){
    dashboardUser();
}elseif($url == "/Ecommerce/index.php/addAdmin"){
    addAdmin();
}elseif($url == "/Ecommerce/index.php/confirmAddAdmin"){
    confirmAddAdmin();
}elseif($url == "/Ecommerce/index.php/deleteUser"){
    deleteUser();
}elseif($url == "/Ecommerce/index.php/alterUser"){
    alterUser();
}elseif($url == "/Ecommerce/index.php/confirmAlterUser"){
    confirmAlterUser();
}
//dashboard product part
elseif($url == "/Ecommerce/index.php/dashboardProduct"){
    dashboardProduct();
}elseif($url == "/Ecommerce/index.php/addProduct"){
    addProduct();
}elseif($url == "/Ecommerce/index.php/confirmAddProduct"){
    confirmAddProduct();
}elseif($url == "/Ecommerce/index.php/deleteProduct"){
    deleteProduct();
}elseif($url == "/Ecommerce/index.php/alterProduct"){
    alterProduct();
}elseif($url == "/Ecommerce/index.php/confirmAlterProduct"){
    confirmAlterProduct();
}elseif($url == "/Ecommerce/index.php/addImagesToProduct"){
    addImagesToProduct();
}

// dashboard categorie part
elseif($url == "/Ecommerce/index.php/dashboardCategorie"){
    dashboardCategorie();
}elseif($url == "/Ecommerce/index.php/addCategorie"){
    addCategorie();
}elseif($url == "/Ecommerce/index.php/confirmAddCategorie"){
    confirmAddCategorie();
}elseif($url == "/Ecommerce/index.php/deleteCategorie"){
    deletCategorie();
}elseif($url == "/Ecommerce/index.php/alterCategorie"){
    alterCategorie();
}elseif($url == "/Ecommerce/index.php/confirmAlterCategorie"){
    confirmAlterCategorie();
}

?>
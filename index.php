<?php
session_start();

$url = $_SERVER['PHP_SELF'];

// client part start
require("./controlleur/client/clientControlleur.php");
if($url == "/Ecommerce/index.php/"){
    home();
}elseif($url == "/Ecommerce/index.php/shop"){
    shop();
}elseif($url == "/Ecommerce/index.php/shopFiltered"){
    shopFiltered();
}elseif($url == "/Ecommerce/index.php/aboutUs"){
    aboutUs();
}elseif($url == "/Ecommerce/index.php/cart"){
    cart();
}elseif($url == "/Ecommerce/index.php/deleteFromCart"){
    deleteFromCart();
}elseif($url == "/Ecommerce/index.php/clearCart"){
    clearCart();
}elseif($url == "/Ecommerce/index.php/checkout"){
    checkout();
}elseif($url == "/Ecommerce/index.php/searsh"){
    searshBar();
}elseif($url == "/Ecommerce/index.php/productDetails"){
    productDetails();
}elseif($url == "/Ecommerce/index.php/loginRegister"){
    loginRegister();
}elseif($url == "/Ecommerce/index.php/confirmLogin"){
    confirmLogin();
}elseif($url == "/Ecommerce/index.php/confirmCreateAcount"){
    confirmCreateAcount();
}elseif($url == "/Ecommerce/index.php/logout"){
    logout();
}elseif($url == "/Ecommerce/index.php/addComment"){
    addComment();
}elseif($url == "/Ecommerce/index.php/deleteComment"){
    deleteComment();
}elseif($url == "/Ecommerce/index.php/addEvaluation"){
    deleteComment();
}
// client part end

// ----------------------------------------------------------------------------------------------------------------------------------------------------------------

// admin part start
require("./controlleur/admin/adminControlleur.php");
// dashboard user part
if($url == "/Ecommerce/index.php/dashboardUser"){
    dashboardUser();
}elseif($url == "/Ecommerce/index.php/dashboardSearshUser"){
    dashboardSearshUser();
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
}elseif($url == "/Ecommerce/index.php/dashboardSearshProduct"){
    dashboardSearshProduct();
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
}elseif($url == "/Ecommerce/index.php/checkProductImages"){
    productCatalogue();
}elseif($url == "/Ecommerce/index.php/deleteImage"){
    deleteImage();
}elseif($url == "/Ecommerce/index.php/addMoreImages"){
    addImages();
}elseif($url == "/Ecommerce/index.php/confirmAddImages"){
    confirmAddImages();
}
// dashboard categorie part
elseif($url == "/Ecommerce/index.php/dashboardCategorie"){
    dashboardCategorie();
}elseif($url == "/Ecommerce/index.php/dashboardSearshCategorie"){
    dashboardSearshCategorie();
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
// session_destroy();
?>
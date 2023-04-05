<?php
session_start();

$url = $_SERVER['PHP_SELF'];

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
    deleteCategorie();
}elseif($url == "/Ecommerce/index.php/alterCategorie"){
    alterCategorie();
}elseif($url == "/Ecommerce/index.php/confirmAlterCategorie"){
    confirmAlterCategorie();
}
// dashboard delivery part
elseif($url == "/Ecommerce/index.php/dashboardSide"){
    dashboardSide();
}elseif($url == "/Ecommerce/index.php/dashboardSearshSide"){
    dashboardSearshSide();
}elseif($url == "/Ecommerce/index.php/addSide"){
    addSide();
}elseif($url == "/Ecommerce/index.php/confirmAddSide"){
    confirmAddSide();
}elseif($url == "/Ecommerce/index.php/deleteSide"){
    deleteSide();
}elseif($url == "/Ecommerce/index.php/alterSide"){
    alterSide();
}elseif($url == "/Ecommerce/index.php/confirmAlterSide"){
    confirmAlterSide();
}

// ----------------------------------------------------------------------------------------------------------------------------------------------------------------

// client part start
elseif($url == "/Ecommerce/index.php/"){

    require("./controlleur/client/clientControlleur.php");
    home();
}elseif($url == "/Ecommerce/index.php/shop"){

    require("./controlleur/client/clientControlleur.php");
    shop();
}elseif($url == "/Ecommerce/index.php/shopFiltered"){

    require("./controlleur/client/clientControlleur.php");
    shopFiltered();
}elseif($url == "/Ecommerce/index.php/aboutUs"){

    require("./controlleur/client/clientControlleur.php");
    aboutUs();
}elseif($url == "/Ecommerce/index.php/cart"){

    require("./controlleur/client/clientControlleur.php");
    cart();
}elseif($url == "/Ecommerce/index.php/deleteFromCart"){

    require("./controlleur/client/clientControlleur.php");
    deleteFromCart();
}elseif($url == "/Ecommerce/index.php/clearCart"){

    require("./controlleur/client/clientControlleur.php");
    clearCart();
}elseif($url == "/Ecommerce/index.php/checkout"){

    require("./controlleur/client/clientControlleur.php");
    checkout();
}elseif($url == "/Ecommerce/index.php/searsh"){

    require("./controlleur/client/clientControlleur.php");
    searshBar();
}elseif($url == "/Ecommerce/index.php/productDetails"){

    require("./controlleur/client/clientControlleur.php");
    productDetails();
}elseif($url == "/Ecommerce/index.php/loginRegister"){

    require("./controlleur/client/clientControlleur.php");
    loginRegister();
}elseif($url == "/Ecommerce/index.php/confirmLogin"){

    require("./controlleur/client/clientControlleur.php");
    confirmLogin();
}elseif($url == "/Ecommerce/index.php/confirmCreateAcount"){

    require("./controlleur/client/clientControlleur.php");
    confirmCreateAccount();
}elseif($url == "/Ecommerce/index.php/logout"){

    require("./controlleur/client/clientControlleur.php");
    logout();
}elseif($url == "/Ecommerce/index.php/addComment"){

    require("./controlleur/client/clientControlleur.php");
    addComment();
}elseif($url == "/Ecommerce/index.php/deleteComment"){

    require("./controlleur/client/clientControlleur.php");
    deleteComment();
}elseif($url == "/Ecommerce/index.php/addEvaluation"){
    
    require("./controlleur/client/clientControlleur.php");
    addEvaluation();
}
// client part end



else{
    require("./controlleur/client/clientControlleur.php");
    err404();
}
?>
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



?>
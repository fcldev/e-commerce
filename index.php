<?php
session_start();

$url = $_SERVER['PHP_SELF'];


require("./controlleur/client/clientControlleur.php");
if($url == "/Ecommerce/index.php/"){
    accuelle();
}elseif($url == "/Ecommerce/index.php/cart"){
    cart();
}elseif($url == "/Ecommerce/index.php/searshBar"){
    searshBar();
}elseif($url == "/Ecommerce/index.php/productDetails"){
    productDetails();
}


// require("./controlleur/client/adminControlleur.php");
// if($url == "/Ecommerce/index.php/"){
//     dashBoard();
// }



?>
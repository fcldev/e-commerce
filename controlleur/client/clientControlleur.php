<?php

function accuelle(){
    require('./models/product.php');
    require('./models/categorie.php');
    $listCategories = (new Categorie)->getAllCategories();
    if(!isset($_GET['categorie']) || $_GET['categorie'] == 'all'){
        $products = (new Product)->getAllProducts();
        require('./views/clientPages/index.php');
        var_dump($products);
    }else{
        $products = (new Product)->getProductsByCategorie($_GET['categorie']);
        require('./views/clientPages/index.php');
        var_dump($products);

    }
}

function cart(){
    require('./views/clientPages/cart.php');
}
function searshBar(){
    require("./models/product.php");
    require('./models/categorie.php');
    $listCategories = (new Categorie)->getAllCategories();

    $inpVal = $_POST['searshBar'];
    $products = (new Product)->getProducts($inpVal);
    require('./views/clientPages/index.php');
}
function productDetails(){
    require('./models/product.php');
    $idProduct = $_GET['idProduct'];
    $product = (new Product)->getProductById($idProduct)[0];
    require('./views/clientPages/productDetails.php');
}
function loginRegister(){
    require("./views/clientPages/loginRegister.php");
}

function confirmLogin(){
    require_once("./models/user.php");
    $user = new User($_POST['username'],$_POST['password']);
    $userInfo = $user->login();

    if(isset($userInfo) && $userInfo[0]['role'] == 'customer'){
        $_SESSION['userInfo'] = $userInfo[0];
        header("Location: /Ecommerce/index.php/?categorie=all");
    }elseif(isset($userInfo) && $userInfo[0]['role'] == 'admin'){
        $_SESSION['userInfo'] = $userInfo[0];
        header("Location: /Ecommerce/index.php/dashboard");
    }else{
        $_SESSION['loginErr'] = '1';
        header("Location: /Ecommerce/index.php/loginRegister");
    }
}

function logout(){
    session_destroy();
    header("Location: /Ecommerce/index.php/?categorie=all");
}

function confirmCreateAcount(){
    require_once("./models/user.php");
    if($_POST['password'] == $_POST['password2']){
        $user = new User($_POST['username'],$_POST['password']);
        $user->setUserInfo($_POST['full_name'],$_POST['email'],$_POST['username'],$_POST['password']);
        $user->createAccount();
        confirmLogin();
    }else{
        $_SESSION['loginErr'] = '2';
        header("Location: /Ecommerce/index.php/loginRegister");
    }

}



?>
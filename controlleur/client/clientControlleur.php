<?php

function home(){
    require('./models/product.php');
    require('./models/categorie.php');
    $listCategories = (new Categorie)->getAllCategories();
    $bestItems = (new Product)->getProductsOrderedByDiscount();
    // var_dump($bestItems);
    $newArrivals = (new Product)->getProductsOrderedByDate();
    if(!isset($_GET['categorie']) || $_GET['categorie'] == 'all'){
        $products = (new Product)->getAllProducts();
        require('./views/clientPages/index.php');
    }else{
        $products = (new Product)->getProductsByCategorie($_GET['categorie']);
        require('./views/clientPages/index.php');

    }
}
function shop(){
    require('./models/product.php');
    require('./models/categorie.php');
    $listCategories = (new Categorie)->getAllCategories();
    $listProducts = (new Product)->getAllProducts();
    require('./views/clientPages/shop.php');
}
function shopFiltered(){
    require('./models/product.php');
    require('./models/categorie.php');
    $listCategories = (new Categorie)->getAllCategories();
    $listProducts = (new Product)->getProductsByCategorie($_GET['categorie']);
    require('./views/clientPages/shop.php');
}
function aboutUs(){
    require('./views/clientPages/aboutUs.php');
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
    // require('./views/clientPages/index.php');
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
        header("Location: /Ecommerce/index.php/dashboardUser");
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
        $file = $_FILES['profile_image']['name'];
        $image = uniqid().$file;
        move_uploaded_file($_FILES['profile_image']['tmp_name'],'./assets/usersProfileImage/'.$image);
        $user->setUserInfo($_POST['full_name'],$_POST['birth_day'],$_POST['email'],$_POST['role'],$image,$_POST['username'],$_POST['password']);
        $user->createAccount();
        confirmLogin();
    }else{
        $_SESSION['loginErr'] = '2';
        header("Location: /Ecommerce/index.php/loginRegister");
    }
}



?>
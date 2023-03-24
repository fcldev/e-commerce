<?php
// home page
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
// shop page (all products)
function shop(){
    require('./models/product.php');
    require('./models/categorie.php');
    $listCategories = (new Categorie)->getAllCategories();
    $listProducts = (new Product)->getAllProducts();
    require('./views/clientPages/shop.php');
}
// shop page filtered by categorie 
function shopFiltered(){
    require('./models/product.php');
    require('./models/categorie.php');
    $listCategories = (new Categorie)->getAllCategories();
    $listProducts = (new Product)->getProductsByCategorie($_GET['categorie']);
    require('./views/clientPages/shop.php');
}
// searsh for products (navBar searsh form)
function searshBar(){
    require("./models/product.php");
    require('./models/categorie.php');
    $listCategories = (new Categorie)->getAllCategories();
    $inpVal = $_POST['searshBar'];
    $products = (new Product)->getProducts($inpVal);
    require('./views/clientPages/shop.php');
}
// about company page
function aboutUs(){
    require('./views/clientPages/aboutUs.php');
}
// cart page
function cart(){
    require('./views/clientPages/cart.php');
}
// ad to cart part
if(isset($_POST['function_name']) && $_POST['function_name'] === "addToCart"){
    $id = $_POST['id_product'];
    addToCart($id);
    exit(0);
}
function addToCart($id){
    if(isset($_SESSION['userInfo'])){
        require('./models/cart.php');
        $cart = new Cart;
        $productsCount = $cart->checkProduct($_SESSION['userInfo']['id_user'],$id,1,0);
        var_dump($productsCount);
        if(count($productsCount) >= 1 ){
            $cart->insceaseQuantity($_SESSION['userInfo']['id_user'],$id);
        }else{
            $cart->addToCart($_SESSION['userInfo']['id_user'],$id,1,0);
            if(isset($_SESSION['listCart'])){
                if(!in_array($id,$_SESSION['listCart'])){
                    $_SESSION['listCart'][]=array('id'=>$id,'quantity'=>1);
                }else{
                    $_SESSION['listCart'][]=array('id'=>$id,'quantity'=>1);
                }
            }else{
                $_SESSION['listCart'][]=array('id'=>$id,'quantity'=>1);
            }
        }
    }else{
        if(isset($_SESSION['listCart'])){
            if(!in_array($id,$_SESSION['listCart'])){
                $_SESSION['listCart'][]=array('id'=>$id,'quantity'=>1);
            }else{
                $_SESSION['listCart'][]=array('id'=>$id,'quantity'=>1);
            }
        }else{
            $_SESSION['listCart'][]=array('id'=>$id,'quantity'=>1);
        }
    }
}
// product details page
function productDetails(){
    require('./models/product.php');
    $idProduct = $_GET['idProduct'];
    $product = (new Product)->getProductById($idProduct)[0];
    require('./views/clientPages/productDetails.php');
}
// Login Regidter Logout functions and pages
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
function logout(){
    unset($_SESSION['userInfo']);
    header("Location: /Ecommerce/index.php/?categorie=all");
}


?>
<?php
// home page
function home(){
    require('./models/product.php');
    require('./models/categorie.php');
    $listCategories = (new Categorie)->getAllCategories();
    $bestItems = (new Product)->getProductsOrderedByDiscount();
    if(isset($_SESSION['userInfo'])){
        require('./models/cart.php');
        $cartCount = (new Cart)->getCartCount($_SESSION['userInfo']['id_user']);
    }else{
        $cartCount = count($_SESSION['listCart']);
    }
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
    require('./models/cart.php');
    $listCategories = (new Categorie)->getAllCategories();
    $listProducts = (new Product)->getAllProducts();
    $cartCount = (new Cart)->getCartCount($_SESSION['userInfo']['id_user']);
    require('./views/clientPages/shop.php');
}
// shop page filtered by categorie 
function shopFiltered(){
    require('./models/product.php');
    require('./models/categorie.php');
    require('./models/cart.php');
    $listCategories = (new Categorie)->getAllCategories();
    $listProducts = (new Product)->getProductsByCategorie($_GET['categorie']);
    $cartCount = (new Cart)->getCartCount($_SESSION['userInfo']['id_user']);
    require('./views/clientPages/shop.php');
}
// searsh for products (navBar searsh form)
function searshBar(){
    require("./models/product.php");
    require('./models/categorie.php');
    require('./models/cart.php');
    $listCategories = (new Categorie)->getAllCategories();
    $inpVal = $_POST['searshBar'];
    $listProducts = (new Product)->getProducts($inpVal);
    $cartCount = (new Cart)->getCartCount($_SESSION['userInfo']['id_user']);
    require('./views/clientPages/shop.php');
}
// about company page
function aboutUs(){
    require('./models/cart.php');
    $cartCount = (new Cart)->getCartCount($_SESSION['userInfo']['id_user']);
    require('./views/clientPages/aboutUs.php');
}
// cart page
function cart(){
    if(isset($_SESSION['userInfo'])){
        require('./models/cart.php');
        require('./models/product.php');
        $cart = new Cart;
        $cartCount = $cart->getCartCount($_SESSION['userInfo']['id_user']);
        $product = new Product;
        $listProductsId = $cart->getCartProducts($_SESSION['userInfo']['id_user']);
        if(!empty($listProductsId)){
            foreach($listProductsId as $c){
                $listProducts[] = array("product"=>$product->getProductById($c['id_product'])[0],"quantity"=>$c['quantity']);
            }
        }else{
            $listProducts = array();
        }
    }elseif(!isset($_SESSION['listCart'])){
        $_SESSION['listCart'] = array();
        $cartCount = count($_SESSION['listCart']);
    }else{
        require('./models/product.php');
        $cartCount = count($_SESSION['listCart']);
        $product = new Product;
        if(!empty($_SESSION['listCart'])){
            foreach($_SESSION['listCart'] as $c){
                $listProducts[] = array("product"=>$product->getProductById($c['id_product'])[0],"quantity"=>$c['quantity']);
            }
        }else{
            $listProducts = array();
        }
    }
    require('./views/clientPages/cart.php');
    // var_dump($_SESSION['listCart']);
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
        $productsCount = $cart->checkProduct($_SESSION['userInfo']['id_user'],$id,0);
        if(count($productsCount) >= 1 ){
            $cart->increaseQuantity($_SESSION['userInfo']['id_user'],$id,1);
        }else{
            $cart->addToCart($_SESSION['userInfo']['id_user'],$id,1,0);
            if(isset($_SESSION['listCart'])){
                if(!in_array($id,$_SESSION['listCart'])){
                    $_SESSION['listCart'][]=array('id_product'=>$id,'quantity'=>1);
                }else{
                    // $_SESSION['listCart'][]=array('id_product'=>$id,'quantity'=>1);
                }
            }else{
                $_SESSION['listCart'][]=array('id_product'=>$id,'quantity'=>1);
            }
        }
    }else{
        if(isset($_SESSION['listCart'])){
            if(!in_array(array('id_product'=>$id,'quantity'=>1),$_SESSION['listCart'])){
                $_SESSION['listCart'][]=array('id_product'=>$id,'quantity'=>1);
            }else{
                
            }
        }else{
            $_SESSION['listCart'][]=array('id_product'=>$id,'quantity'=>1);
        }
    }
}
// add to cart with quantity
if(isset($_POST['function_name']) && $_POST['function_name'] === "addToCartWithQuantity"){
    $id = $_POST['id_product'];
    $quantity = $_POST['quantity'];
    addToCart($id,$quantity);
    exit(0);
}
function addToCartWithQuantity($id,$quantity){
    if(isset($_SESSION['userInfo'])){
        require('./models/cart.php');
        $cart = new Cart;
        $productsCount = $cart->checkProduct($_SESSION['userInfo']['id_user'],$id);
        if(count($productsCount) >= 1 ){
            $cart->increaseQuantity($_SESSION['userInfo']['id_user'],$id,$quantity);
        }else{
            $cart->addToCart($_SESSION['userInfo']['id_user'],$id,$quantity,0);
            if(isset($_SESSION['listCart'])){
                if(!in_array($id,$_SESSION['listCart'])){
                    $_SESSION['listCart'][]=array('id_product'=>$id,'quantity'=>$quantity);
                }else{
                    // $_SESSION['listCart'][]=array('id_product'=>$id,'quantity'=>1);
                }
            }else{
                $_SESSION['listCart'][]=array('id_product'=>$id,'quantity'=>1);
            }
        }
    }else{
        if(isset($_SESSION['listCart'])){
            if(!in_array(array('id_product'=>$id,'quantity'=>1),$_SESSION['listCart'])){
                $_SESSION['listCart'][]=array('id_product'=>$id,'quantity'=>$quantity);
            }else{
                
            }
        }else{
            $_SESSION['listCart'][]=array('id_product'=>$id,'quantity'=>1);
        }
    }
}
// change cart quantity part
if(isset($_POST['function_name']) && isset($_SESSION['userInfo']) && $_POST['function_name'] === "changeCartQuantity"){
    $id = $_POST['id_product'];
    $quantity = $_POST['quantity'];
    changeCartQuantity($_SESSION['userInfo']['id_user'],$id,$quantity);
    exit(0);
}
function changeCartQuantity($idUser,$idProduct,$quantity){
    require('./models/cart.php');
    $cart = new Cart;
    $cart->changeCartQuantity($idUser,$idProduct,$quantity);
    echo $quantity;
}
// change cart color part
if(isset($_POST['function_name']) && isset($_SESSION['userInfo']) && $_POST['function_name'] === "changeCartColor"){
    $id = $_POST['id_product'];
    $color = $_POST['color'];
    changeCartColor($_SESSION['userInfo']['id_user'],$id,$color);
    exit(0);
}
function changeCartColor($idUser,$idProduct,$color){
    require('./models/cart.php');
    $cart = new Cart;
    $cart->changeCartColor($idUser,$idProduct,$color);
}
// change cart size part
if(isset($_POST['function_name']) && isset($_SESSION['userInfo']) && $_POST['function_name'] === "changeCartSize"){
    $id = $_POST['id_product'];
    $size = $_POST['size'];
    changeCartSize($_SESSION['userInfo']['id_user'],$id,$size);
    exit(0);
}
function changeCartSize($idUser,$idProduct,$size){
    require('./models/cart.php');
    $cart = new Cart;
    $cart->changeCartSize($idUser,$idProduct,$size);
}
// checkout page
function checkout(){
    if(isset($_SESSION['userInfo'])){
        require("./views/clientPages/checkout.php");
    }else{
        require("./views/clientPages/loginRegister.php");
    }
}
// delete from cart part
function deleteFromCart(){
    if(isset($_SESSION['userInfo'])){
        require('./models/cart.php');
        $cart = new Cart;
        $cart->deleteFromCart($_GET['id_product'],$_SESSION['userInfo']['id_user']);
    }else{
        $newList = array();
        foreach($_SESSION['listCart'] as $p){
            if($p['id_product'] != $_GET['id_product']){
                $newList [] = $p;
            }
        }
        $_SESSION['listCart'] = $newList;
    }
    header("Location: /Ecommerce/index.php/cart");
}
// delete all products in cart
function clearCart(){
    if(isset($_SESSION['userInfo'])){
        require('./models/cart.php');
        $cart = new Cart;
        $cart->clearCart($_SESSION['userInfo']['id_user']);
    }else{
        if(isset($_SESSION['listCart']) &&  !empty($_SESSION['listCart'])){
            unset($_SESSION['listCart']);
            $_SESSION['listCart'] = array();
        }
    }
    header("Location: /Ecommerce/index.php/cart");
}
// product details page
function productDetails(){
    require('./models/product.php');
    require('./models/image.php');
    require('./models/comment.php');
    require('./models/review.php');
    if(isset($_SESSION['userInfo'])){
        require('./models/cart.php');
        $cartCount = (new Cart)->getCartCount($_SESSION['userInfo']['id_user']);
    }else{
        $cartCount = count($_SESSION['listCart']);
    }
    $idProduct = $_GET['idProduct'];
    $c = new Comment;
    $r = new Review;
    $listR = $r->getAllEvaluations($idProduct);
    $comments = $c->getComments($idProduct);
    $product = (new Product)->getProductById($idProduct)[0];
    $images = (new Image)->getImagesByProductId($idProduct);
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
        // add products in session cart to account cart
        if(isset($_SESSION['listCart']) && !empty($_SESSION['listCart'])){
            require('./models/cart.php');
            $cart = new Cart;
            foreach($_SESSION['listCart'] as $c){
                $productsCount = $cart->checkProduct($_SESSION['userInfo']['id_user'],$c['id_product'],0);
                if(count($productsCount) >= 1 ){
                    $cart->increaseQuantity($_SESSION['userInfo']['id_user'],$c['id_product']);
                }
            }
        }
        header("Location: /Ecommerce/index.php/?categorie=all");
    }elseif(isset($userInfo) && $userInfo[0]['role'] == 'admin'){
        $_SESSION['userInfo'] = $userInfo[0];
        // add products in session cart to account cart
        if(isset($_SESSION['listCart']) && !empty($_SESSION['listCart'])){
            require('./models/cart.php');
            $cart = new Cart;
            foreach($_SESSION['listCart'] as $c){
                $productsCount = $cart->checkProduct($_SESSION['userInfo']['id_user'],$c['id_product'],0);
                if(count($productsCount) >= 1 ){
                    $cart->increaseQuantity($_SESSION['userInfo']['id_user'],$c['id_product'],1);
                }else{
                    $cart->addToCart($_SESSION['userInfo']['id_user'],$c['id_product'],1,0);
                }
            }
        }
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
// add a comment for product
function addComment(){
    if(isset($_SESSION['userInfo'])){
        require('./models/comment.php');
        $date = date('Y-m-d');
        $c = new Comment;
        $c->addComment($_SESSION['userInfo']['id_user'],$_GET['id_product'],$date,$_POST['comment']);
        header('Location: /Ecommerce/index.php/productDetails?idProduct='.$_GET['id_product']);
    }else{
        require('./Ecommerce/index.php/confirmLogin');
    }
}
// delete your comment
function deleteComment(){
    if(isset($_SESSION['userInfo']) && $_SESSION['userInfo']['id_user'] == $_GET['id_user'] ){
        require('./models/comment.php');
        $c = new Comment;
        $c->deleteComment($_GET['id_comment']);
        header('Location: /Ecommerce/index.php/productDetails?idProduct='.$_GET['id_product']);
    }else{
        header('Location: /Ecommerce/index.php/loginRegister');
    }
}
// add a rating
function addEvaluation(){
    if(isset($_SESSION['userInfo'])){
        require('./models/review.php');
        $r = new Review;
        $listR = $r->checkEvaluation($_SESSION['userInfo']['id_user'],$_GET['id_product']);
        if(count($listR) > 0){
            $r->alterEvaluation($_SESSION['userInfo']['id_user'],$_GET['id_product'],$_GET['evaluation']);
            changeProductEvaluation($_GET['id_product']);
            header('Location: /Ecommerce/index.php/productDetails?idProduct='.$_GET['id_product']);
        }else{
            $r->addEvaluation($_SESSION['userInfo']['id_user'],$_GET['id_product'],$_GET['evaluation']);
            changeProductEvaluation($_GET['id_product']);
            header('Location: /Ecommerce/index.php/productDetails?idProduct='.$_GET['id_product']);
        }
    }else{
        require('./Ecommerce/index.php/confirmLogin');
    }
}
// change rating
function changeProductEvaluation($idProduct){
    require('./models/product.php');
    $p = new Product;
    $r = new Review;
    $listEvaluations = $r->getAllEvaluations($idProduct);
    $sum = 0;
    foreach($listEvaluations as $e){
        $sum += ($e['evaluation'] + 0);
    }
    $evaluation = $sum / count($listEvaluations);
    $p->changeProductEvaluation($idProduct,$evaluation);
}
function error404(){
    require('./views/clientPages/404.php');

}
?>
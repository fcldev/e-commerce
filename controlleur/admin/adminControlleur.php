<?php
// part user start
function dashboardUser(){
    if(isset($_SESSION['userInfo']) && $_SESSION['userInfo']['role'] == 'admin' ){
        require("./models/user.php");
        $user = new User($_SESSION['userInfo']['username'],$_SESSION['userInfo']['password']);
        $users = $user->getAllUsers();
        require('./views/adminPages/user/dashboardUser.php');
    }else{
        // header('Location: /Ecommerce/index.php/loginRegister');
    }
    
}
function addAdmin(){
    if(isset($_SESSION['userInfo']) && $_SESSION['userInfo']['role'] == 'admin' ){
        require('./views/adminPages/user/addAdmin.php');
    }else{
        header('Location: /Ecommerce/index.php/loginRegister');
    }
}
function confirmAddAdmin(){
    if(isset($_SESSION['userInfo']) && $_SESSION['userInfo']['role'] == 'admin' ){
        require("./models/user.php");
        $user = new User($_POST['username'],$_POST['password']);
        $file = $_FILES['profile_image']['name'];
        $image = uniqid().$file;
        move_uploaded_file($_FILES['profile_image']['tmp_name'],'./assets/usersProfileImage/'.$image);
        $user->setUserInfo($_POST['full_name'],$_POST['birth_day'],$_POST['email'],$image,$_POST['username'],$_POST['password']);
        $user->setUserRole('admin');
        $user->createAccount();
        header('Location: /Ecommerce/index.php/dashboardUser');
    }else{
        header('Location: /Ecommerce/index.php/loginRegister');
    }
}
function deleteUser(){
    if(isset($_SESSION['userInfo']) && $_SESSION['userInfo']['role'] == 'admin' ){
        require("./models/user.php");
        $user = new User($_POST['username'],$_POST['password']);
        $user->deleteUser($_GET['id_user']);
        header('Location: /Ecommerce/index.php/dashboardUser');
    }else{
        header('Location: /Ecommerce/index.php/loginRegister');
    }
}
function alterUser(){
    if(isset($_SESSION['userInfo']) && $_SESSION['userInfo']['role'] == 'admin'){
        require("./models/user.php");
        $user = new User($_SESSION['userInfo']['username'],$_SESSION['userInfo']['password']);
        $user1 = $user->getUserById($_GET['id_user'])[0];
        require('./views/adminPages/user/alterUser.php');
    }else{
        header('Location: /Ecommerce/index.php/loginRegister');
    }
}
function confirmAlterUser(){
    if(isset($_SESSION['userInfo']) && $_SESSION['userInfo']['role'] == 'admin'){
        if($_POST['password'] === $_POST['password2']){
            require("./models/user.php");
            $user = new User($_POST['username'],$_POST['password']);
            $file = $_FILES['profile_image']['name'];
            $image = uniqid().$file;
            if($file == ""){
                $image = $user->getUsersImage($_GET['id_user'])[0]['profile_image'];
            }
            move_uploaded_file($_FILES['profile_image']['tmp_name'],'./assets/usersProfileImage/'.$image);
            $user->setUserInfo($_POST['full_name'],$_POST['birth_day'],$_POST['email'],$image,$_POST['username'],$_POST['password']);
            $user->setUserRole($_POST['role']);
            $user->alterUserInfo($_GET['id_user']);
            header('Location: /Ecommerce/index.php/dashboardUser');
        }else{
            header('Location: /Ecommerce/index.php/alterUser?id_user='.$_GET['id_user'].'&err=2');
        }
    }else{
        header('Location: /Ecommerce/index.php/loginRegister');
    }
}
// part user end
// ------------------------------------------------------------------------------------------------------------------------------------------------------------
// part product start
function dashboardProduct(){
    if(isset($_SESSION['userInfo']) && $_SESSION['userInfo']['role'] == 'admin' ){
        require("./models/product.php");
        $product = new Product;
        $products = $product->getAllProducts();
        require('./views/adminPages/product/dashboardProduct.php');
    }else{
        header('Location: /Ecommerce/index.php/loginRegister');
    }
}
function addProduct(){
    if(isset($_SESSION['userInfo']) && $_SESSION['userInfo']['role'] == 'admin' ){
        require('./views/adminPages/product/addProduct.php');
    }else{
        header('Location: /Ecommerce/index.php/loginRegister');
    }
}
function confirmAddProduct(){
    if(isset($_SESSION['userInfo']) && $_SESSION['userInfo']['role'] == 'admin' ){
        require("./models/product.php");
        $product = new Product;
        $file = $_FILES['general_image']['name'];
        $image = uniqid().$file;
        move_uploaded_file($_FILES['general_image']['tmp_name'],'./assets/productsImages/'.$image);
        $product->setProductInfo($_POST['name'],$_POST['description'],$_POST['tags'],$_POST['price'],$_POST['video'],$_POST['quantity'],$_POST['visibility'],$_POST['date_arrivale'],$_POST['sizes_available'],$_POST['discount'],$_POST['categorie_name'],$image);
        $product->addProduct();
        header('Location: /Ecommerce/index.php/dashboardProduct');
    }else{
        header('Location: /Ecommerce/index.php/loginRegister');
    }
}
function deleteProduct(){
    if(isset($_SESSION['userInfo']) && $_SESSION['userInfo']['role'] == 'admin' ){
        require("./models/product.php");
        $product = new Product;
        $product->deleteProduct($_GET['id_product']);
        header('Location: /Ecommerce/index.php/dashboardProduct');
    }else{
        header('Location: /Ecommerce/index.php/loginRegister');
    }
}
function alterProduct(){
    if(isset($_SESSION['userInfo']) && $_SESSION['userInfo']['role'] == 'admin'){
        require("./models/product.php");
        $product = new Product;
        $product1 = $product->getProductById($_GET['id_product'])[0];
        require('./views/adminPages/product/alterProduct.php');
    }else{
        header('Location: /Ecommerce/index.php/loginRegister');
    }
}
function confirmAlterProduct(){
    if(isset($_SESSION['userInfo']) && $_SESSION['userInfo']['role'] == 'admin'){
            require("./models/product.php");
            $product = new Product;
            $file = $_FILES['general_image']['name'];
            $image = uniqid().$file;
            if($file == ""){
                $image = $product->getProductsImage($_GET['id_product'])[0]['general_image'];
            }
            move_uploaded_file($_FILES['general_image']['tmp_name'],'./assets/productsImages/'.$image);
            $product->setProductInfo($_POST['name'],$_POST['description'],$_POST['tags'],$_POST['price'],$_POST['video'],$_POST['quantity'],$_POST['visibility'],$_POST['date_arrivale'],$_POST['sizes_available'],$_POST['discount'],$_POST['categorie_name'],$image);
            $product->alterProductInfo($_GET['id_product']);
            header('Location: /Ecommerce/index.php/dashboardProduct');
    }else{
        header('Location: /Ecommerce/index.php/loginRegister');
    }
}
function productCatalogue(){
    if(isset($_SESSION['userInfo']) && $_SESSION['userInfo']['role'] == 'admin'){
        require("./models/product.php");
        require("./models/image.php");
        $image = new Image;
        $listImages = $image->getImagesByProductId($_GET['id_product']);
        var_dump($listImages);
        require('./views/adminPages/product/productCatalogue.php');
    }else{
        header('Location: /Ecommerce/index.php/loginRegister');
    }
}
// part product end
// ------------------------------------------------------------------------------------------------------------------------------------------------------------
// part categorie start
function dashboardCategorie(){
    if(isset($_SESSION['userInfo']) && $_SESSION['userInfo']['role'] == 'admin' ){
        require("./models/categorie.php");
        $categorie = new Categorie;
        $categories = $categorie->getAllCategories();
        require('./views/adminPages/categorie/dashboardCategorie.php');
    }else{
        header('Location: /Ecommerce/index.php/loginRegister');
    }
}
function addCategorie(){
    if(isset($_SESSION['userInfo']) && $_SESSION['userInfo']['role'] == 'admin' ){
        require('./views/adminPages/categorie/addCategorie.php');
    }else{
        header('Location: /Ecommerce/index.php/loginRegister');
    }
}
function confirmAddCategorie(){
    if(isset($_SESSION['userInfo']) && $_SESSION['userInfo']['role'] == 'admin' ){
        require("./models/categorie.php");
        $categorie = new Categorie;
        $categorie->setCategorieInfo($_POST['categorie_name']);
        $categorie->addCategorie();
        header('Location: /Ecommerce/index.php/dashboardCategorie');
    }else{
        header('Location: /Ecommerce/index.php/loginRegister');
    }
}
function deletCategorie(){
    if(isset($_SESSION['userInfo']) && $_SESSION['userInfo']['role'] == 'admin' ){
        require("./models/categorie.php");
        $categorie = new Categorie;
        $categorie->deleteCategorie($_GET['categorie_name']);
        header('Location: /Ecommerce/index.php/dashboardCategorie');
    }else{
        header('Location: /Ecommerce/index.php/loginRegister');
    }
}
function alterCategorie(){
    if(isset($_SESSION['userInfo']) && $_SESSION['userInfo']['role'] == 'admin' ){
        require("./models/categorie.php");
        $categorie = new Categorie;
        $categorie1 = $categorie->getCategorie($_GET['categorie_name'])[0];
        require('./views/adminPages/categorie/alterCategorie.php');
    }else{
        header('Location: /Ecommerce/index.php/loginRegister');
    }
}
function confirmAlterCategorie(){
    if(isset($_SESSION['userInfo']) && $_SESSION['userInfo']['role'] == 'admin'){
            require("./models/categorie.php");
            $categorie = new Categorie;
            $categorie->setCategorieInfo($_POST['categorie_name']);
            $categorie->alterCategorieInfo($_GET['categorie_name']);
            header('Location: /Ecommerce/index.php/dashboardCategorie');
    }else{
        header('Location: /Ecommerce/index.php/loginRegister');
    }
}
// part categorie end
?>
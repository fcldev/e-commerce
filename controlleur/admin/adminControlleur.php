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
        require('./views/adminPages/user/addAProduct.php');
    }else{
        header('Location: /Ecommerce/index.php/loginRegister');
    }
}
function confirmAddProduct(){
    if(isset($_SESSION['userInfo']) && $_SESSION['userInfo']['role'] == 'admin' ){
        require("./models/product.php");
        $product = new Product;
        $product->setProductInfo($_POST['name']);
        $product->addProduct();
        header('Location: /Ecommerce/index.php/dashboardProduct');
    }else{
        header('Location: /Ecommerce/index.php/loginRegister');
    }
}
function deleteProduct(){
    if(isset($_SESSION['userInfo']) && $_SESSION['userInfo']['role'] == 'admin' ){
        require("./models/product.php");
        $user = new Product;
        $user->deleteProduct($_GET['id_product']);
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
        require('./views/adminPages/user/alterProduct.php');
    }else{
        header('Location: /Ecommerce/index.php/loginRegister');
    }
}
function confirmAlterProduct(){
    if(isset($_SESSION['userInfo']) && $_SESSION['userInfo']['role'] == 'admin'){
            require("./models/product.php");
            $product = new Product;
            $product->setProductInfo($_POST['full_name'],);
            $user->alterProductInfo($_GET['id_product']);
            header('Location: /Ecommerce/index.php/dashboardProduct');
    }else{
        header('Location: /Ecommerce/index.php/loginRegister');
    }
}
// part product end
// ------------------------------------------------------------------------------------------------------------------------------------------------------------
// part categorie start
function dashboardCategorie(){
    if(isset($_SESSION['userInfo']) && $_SESSION['userInfo']['role'] == 'admin' ){
        require('./views/adminPages/categorie/dashboardCategorie.php');
    }else{
        header('Location: /Ecommerce/index.php/loginRegister');
    }
}
// part categorie end
?>
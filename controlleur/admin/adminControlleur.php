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
function dashboardSearshUser(){
    if(isset($_SESSION['userInfo']) && $_SESSION['userInfo']['role'] == 'admin' ){
        require("./models/user.php");
        $user = new User($_SESSION['userInfo']['username'],$_SESSION['userInfo']['password']);
        $users = $user->searshForUsers($_POST['input_val']);
        require('./views/adminPages/user/dashboarduser.php');
    }else{
        header('Location: /Ecommerce/index.php/loginRegister');
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
        // var_dump($products);
        require('./views/adminPages/product/dashboardProduct.php');
    }else{
        header('Location: /Ecommerce/index.php/loginRegister');
    }
}
function dashboardSearshProduct(){
    if(isset($_SESSION['userInfo']) && $_SESSION['userInfo']['role'] == 'admin' ){
        require("./models/product.php");
        $product = new Product;
        $products = $product->searshForProducts($_POST['input_val']);
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
        $product->setProductInfo($_POST['name'],$_POST['description'],$_POST['tags'],$_POST['price'],$_POST['video'],$_POST['quantity'],$_POST['visibility'],$_POST['date_arrivale'],$_POST['sizes_available'],$_POST['colors'],$_POST['discount'],$_POST['categorie_name']);
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
        $product->setProductInfo($_POST['name'],$_POST['description'],$_POST['tags'],$_POST['price'],$_POST['video'],$_POST['quantity'],$_POST['visibility'],$_POST['date_arrivale'],$_POST['sizes_available'],$_POST['colors'],$_POST['discount'],$_POST['categorie_name']);
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
        require('./views/adminPages/product/productCatalogue.php');
    }else{
        header('Location: /Ecommerce/index.php/loginRegister');
    }
}
function deleteImage(){
    if(isset($_SESSION['userInfo']) && $_SESSION['userInfo']['role'] == 'admin'){
        require("./models/image.php");
        $image = new Image;
        $listImages = $image->deleteImage($_GET['id_image']);
        header('Location: /Ecommerce/index.php/checkProductImages?id_product='.$_GET['id_product']);
    }else{
        header('Location: /Ecommerce/index.php/loginRegister');
    }
}
function addImages(){
    if(isset($_SESSION['userInfo']) && $_SESSION['userInfo']['role'] == 'admin'){
        require('./views/adminPages/product/addMoreImages.php');
    }else{
        header('Location: /Ecommerce/index.php/loginRegister');
    }
}
function confirmAddImages(){
    if(isset($_SESSION['userInfo']) && $_SESSION['userInfo']['role'] == 'admin'){
        require("./models/image.php");
        $image = new Image;
        $file = $_FILES['product_image']['name'];
        $imageUrl = uniqid().$file;
        move_uploaded_file($_FILES['product_image']['tmp_name'],'./assets/productsImages/'.$imageUrl);
        $image->addImage($_GET['id_product'],$imageUrl,$_POST['index']);
        header('Location: /Ecommerce/index.php/checkProductImages?id_product='.$_GET['id_product']);
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
function dashboardSearshCategorie(){
    if(isset($_SESSION['userInfo']) && $_SESSION['userInfo']['role'] == 'admin' ){
        require("./models/categorie.php");
        $categorie = new Categorie;
        $categories = $categorie->searshForCategories($_POST['input_val']);
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
function deleteCategorie(){
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

// ------------------------------------------------------------------------------------------------------------------------------------------------------------

// part delivery start
function dashboardSide(){
    if(isset($_SESSION['userInfo']) && $_SESSION['userInfo']['role'] == 'admin' ){
        require("./models/delivery.php");
        $delivery = new Delivery;
        $sides = $delivery->getAllSides();
        require('./views/adminPages/delivery/dashboardSide.php');
    }else{
        header('Location: /Ecommerce/index.php/loginRegister');
    }
}
function dashboardSearshSide(){
    if(isset($_SESSION['userInfo']) && $_SESSION['userInfo']['role'] == 'admin' ){
        require("./models/delivery.php");
        $delivery = new Delivery;
        $sides = $delivery->fetSides($_POST['input_val']);
        require('./views/adminPages/delivery/dashboardSide.php');
    }else{
        header('Location: /Ecommerce/index.php/loginRegister');
    }
}
function addSide(){
    if(isset($_SESSION['userInfo']) && $_SESSION['userInfo']['role'] == 'admin' ){
        require('./views/adminPages/delivery/addside.php');
    }else{
        header('Location: /Ecommerce/index.php/loginRegister');
    }
}
function confirmAddSide(){
    if(isset($_SESSION['userInfo']) && $_SESSION['userInfo']['role'] == 'admin' ){
        require("./models/delivery.php");
        $delivery = new Delivery;
        $delivery->setSideInfo($_POST['side'],$_POST['price']);
        $delivery->addSide();
        header('Location: /Ecommerce/index.php/dashboardSide');
    }else{
        header('Location: /Ecommerce/index.php/loginRegister');
    }
}
function deleteSide(){
    if(isset($_SESSION['userInfo']) && $_SESSION['userInfo']['role'] == 'admin' ){
        require("./models/delivery.php");
        $delivery = new Delivery;
        $delivery->deleteSide($_GET['side']);
        header('Location: /Ecommerce/index.php/dashboardSide');
    }else{
        header('Location: /Ecommerce/index.php/loginRegister');
    }
}
function alterSide(){
    if(isset($_SESSION['userInfo']) && $_SESSION['userInfo']['role'] == 'admin' ){
        require("./models/delivery.php");
        $delivery = new Delivery;
        $side = $delivery->getSide($_GET['side'])[0];
        require('./views/adminPages/delivery/alterSide.php');
    }else{
        header('Location: /Ecommerce/index.php/loginRegister');
    }
}
function confirmAlterSide(){
    if(isset($_SESSION['userInfo']) && $_SESSION['userInfo']['role'] == 'admin'){
            require("./models/delivery.php");
            $delivery = new Delivery;
            $delivery->setSideInfo($_POST['side'],$_POST['price']);
            $delivery->alterSide();
            header('Location: /Ecommerce/index.php/dashboardSide');
    }else{
        header('Location: /Ecommerce/index.php/loginRegister');
    }
}
// part delivery end

// ------------------------------------------------------------------------------------------------------------------------------------------------------------

// part orders start
function dashboardOrder(){
    if(isset($_SESSION['userInfo']) && $_SESSION['userInfo']['role'] == 'admin' ){
        require("./models/order.php");
        $order = new Order;
        $orders = $order->getAllOrders();
        require('./views/adminPages/order/dashboardOrder.php');
    }else{
        header('Location: /Ecommerce/index.php/loginRegister');
    }
}
function dashboardSearshOrder(){
    if(isset($_SESSION['userInfo']) && $_SESSION['userInfo']['role'] == 'admin' ){
        require("./models/order.php");
        $order = new Order;
        $orders = $order->getOrders($_POST['input_val']);
        require('./views/adminPages/order/dashboardOrder.php');
    }else{
        header('Location: /Ecommerce/index.php/loginRegister');
    }
}
function deleteOrder(){
    if(isset($_SESSION['userInfo']) && $_SESSION['userInfo']['role'] == 'admin' ){
        require("./models/order.php");
        $order = new Order;
        $order->deleteOrder($_GET['order']);
        header('Location: /Ecommerce/index.php/dashboardOrder');
    }else{
        header('Location: /Ecommerce/index.php/loginRegister');
    }
}
function alterOrder(){
    if(isset($_SESSION['userInfo']) && $_SESSION['userInfo']['role'] == 'admin' ){
        require("./models/order.php");
        $order = new Order;
        $side = $order->getOrder($_GET['order'])[0];
        require('./views/adminPages/order/alterOrder.php');
    }else{
        header('Location: /Ecommerce/index.php/loginRegister');
    }
}
function confirmAlterOrder(){
    if(isset($_SESSION['userInfo']) && $_SESSION['userInfo']['role'] == 'admin'){
            require("./models/order.php");
            $order = new Order;
            $order->setOrderStatusInfo($_POST['state']);
            $order->alterOrderStatus();
            header('Location: /Ecommerce/index.php/dashboardOrder');
    }else{
        header('Location: /Ecommerce/index.php/loginRegister');
    }
}
// part orders end
?>
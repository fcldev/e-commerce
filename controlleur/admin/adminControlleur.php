<?php

function dashboardUser(){
    require_once("./models/user.php");
    $user = new User($_SESSION['username'],$_SESSION['password']);
     $users = $user->getAllUsers();
    require('./views/adminPages/dashboardUser.php');
}
function dashboardProduct(){
    require('./views/adminPages/dashboardProduct.php');
}
function dashboardCategorie(){
    require('./views/adminPages/dashboardCategorie.php');
}









?>
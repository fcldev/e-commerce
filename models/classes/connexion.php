<?php

class Connexion{
    public $username = "root";
    public $password = "";
    public $dbname = "ecommerce";
    public $host = "localhost:3308"

    public function connexion(){
        new PDO("mysql:host=$this->host;dbname=$this->dbname",$this->username,$this->password);
    }
}


?>
<!-- $username = "root";
$password = "";
$dbname = "store";
$host = "localhost:3308";


$connexion = new PDO("mysql:host=$host;dbname=$dbname",$username,$password); -->


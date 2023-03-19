<?php
class User{
    public $full_name;
    public $email;
    public $role = 'customer';
    public $username;
    public $password;

    function __construct($username,$password){
        $this->username = $username;
        $this->password = $password;
    }

    public function login(){
        require("connexion.php");
        $sql = "SELECT * FROM user WHERE username=:username AND password=:password";
        $stm = $connexion->prepare($sql);
        $stm->bindParam(':username',$this->username);
        $stm->bindParam(':password',$this->password);
        $stm->execute();
        $account = $stm->fetchAll();
        return $account;
    }

    public function setUserInfo($full_name,$email,$username,$password){
        $this->full_name = $full_name; 
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
    }

    public function setUserRole($role){
        $this->role = $role; 
    }

    public function createAccount(){
        require("connexion.php");
        $sql = "INSERT INTO user(`id_user`, `full_name`, `email` , `role`, `username`, `password`) VALUES (default,:full_name,:email,:role,:username,:password)";
        $stm = $connexion->prepare($sql);
        $stm->bindParam(':full_name',$this->full_name);
        $stm->bindParam(':email',$this->email);
        $stm->bindParam(':role',$this->role);
        $stm->bindParam(':username',$this->username);
        $stm->bindParam(':password',$this->password);
        $stm->execute();
    }

    public function getAllUsers(){
        require("connexion.php");
        $sql = "SELECT * FROM user";
        $stm = $connexion->prepare($sql);
        $stm->execute();
        $listUsers = $stm->fetchAll();
        return $listUsers;
    }

    public function getUserById($idUser){
        require("connexion.php");
        $sql = "SELECT * FROM user WHERE idUtilisateur = :idUser";
        $stm = $connexion->prepare($sql);
        $stm->bindParam(":idUser",$idUser);
        $stm->execute();
        $listUsers = $stm->fetchAll();
        return $listUsers;
    }

    public function deleteUser($idUser){
        require("connexion.php");
        $sql = "DELETE FROM user WHERE idUtilisateur = :idUser";
        $stm = $connexion->prepare($sql);
        $stm->bindParam(':idUser',$idUser);
        $stm->execute();
    }

    public function modifieUser($idUser){
        require("connexion.php");
        $sql = "UPDATE `user` SET `full_name`=:full_name,`email` =:email,`role`=:role,`username`=:username,`password`=:password WHERE id_user = :idUser";
        $stm = $connexion->prepare($sql);
        $stm->bindParam(':idUser',$idUser);
        $stm->bindParam(':full_name',$this->full_name);
        $stm->bindParam(':email',$this->email);
        $stm->bindParam(':role',$this->role);
        $stm->bindParam(':username',$this->username);
        $stm->bindParam(':password',$this->password);
        $stm->execute();
        }
}


?>
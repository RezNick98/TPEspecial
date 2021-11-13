<?php
class userModel
{
    private $dbUser;
    function __construct()
    {
        $this->dbUser=new PDO('mysql:host=localhost;'.'dbname=db_TPEspecial;charset=utf8', 'root', '');
    }
    function createUser($Email, $Password,$Nombreusuario){
        $Password=password_hash($_POST['Password'],PASSWORD_BCRYPT);
        $sentencia = $this->dbUser->prepare("INSERT INTO usuario(Email,Password,Nombreusuario) VALUES(?, ?, ?)");
        $sentencia->execute([$Email,$Password,$Nombreusuario]);
    }
    function getUserMail($Email){
        $sentencia= $this->dbUser->prepare("SELECT  * FROM  usuario WHERE  Email=?");
        $sentencia->execute([$Email]);
        $user = $sentencia->fetch(PDO::FETCH_OBJ);
        return $user;
    }
        function getUser($Nombreusuario){
        $sentencia = $this->dbUser->prepare("SELECT * FROM usuario WHERE Nombreusuario = ?");
        $sentencia->execute([$Nombreusuario]);
        $user = $sentencia->fetch((PDO::FETCH_OBJ));
        return $user;

    }

}



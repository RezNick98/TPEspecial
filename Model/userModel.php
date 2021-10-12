<?php
class userModel
{
    private $dbUser;
    function __construct()
    {
        $this->dbUser=new PDO('mysql:host=localhost;'.'dbname=db_TPEspecial;charset=utf8', 'root', '');
    }
    function createUser($Email, $Password){
        $Password=password_hash($_POST['Password'],PASSWORD_BCRYPT);
        $sentencia = $this->dbUser->prepare("INSERT INTO usuario(Email,Password) VALUES(?, ?)");
        $sentencia->execute([$Email,$Password]);
    }
    function getUser($Email){
        $sentencia= $this->dbUser->prepare("SELECT  * FROM  usuario WHERE  Email=?");
        $sentencia->execute([$Email]);
        $user = $sentencia->fetch(PDO::FETCH_OBJ);
        return $user;
    }

}



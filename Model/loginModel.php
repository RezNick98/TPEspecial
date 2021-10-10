<?php
class loginModel
{
    private $dbLogin;
    function __construct()
    {
        $this->dbLogin=new PDO('mysql:host=localhost;'.'dbname=db_TPEspecial;charset=utf8', 'root', '');
    }
    function registerUser($Email,$Password){
        $user = $this->dbLogin->prepare("INSERT INTO usuario(Email, Password) VALUES('?',?)");
        $Password = password_hash('Password',PASSWORD_BCRYPT);        
        $user->execute([$Email],[$Password]);
    }
    function loginUser($Email){
        $sentencia= $this->dbLogin->prepare('SELECT  * FROM  usuario WHERE $Email=?');
        $sentencia->execute([$Email]);
        $user = $sentencia->fetch(PDO::FETCH_OBJ);
    }

}



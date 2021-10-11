<?php
class userModel
{
    private $dbLogin;
    function __construct()
    {
        $this->dbLogin=new PDO('mysql:host=localhost;'.'dbname=db_TPEspecial;charset=utf8', 'root', '');
    }
    function getUser($Email){
        $sentencia= $this->dbLogin->prepare('SELECT  * FROM  usuario WHERE Email=?');
        $sentencia->execute([$Email]);
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

}



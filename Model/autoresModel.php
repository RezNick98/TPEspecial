<?php
class autoresModel{
    private $dbAutores;
    function __construct()
    {
        $this->dbAutores=new PDO('mysql:host=localhost;'.'dbname=db_TPespecial;charset=utf8', 'root', '');
    }
    function getAutors(){
        $query=$this->dbAutores->prepare("SELECT * FROM Autores");
        $query->execute();
        $autors = $query->fetchAll(PDO::FETCH_OBJ);
        return $autors; 
    }
}
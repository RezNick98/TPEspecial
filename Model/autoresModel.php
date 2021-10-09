<?php
require_once 'Model/librosModel.php';
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
    function insertAutor($Id_autor,$Nombre,$Apellido){
        $newAutor = $this->dbAutores->prepare("INSERT INTO autores('Id_autor','Nombre','Apellido') VALUES(?,?,?)");
        $newAutor->execute(array($Id_autor,$Nombre,$Apellido));
    }
    function getAutor($Id_autor){
        $query=$this->dbAutores->prepare("SELECT a.Nombre,a.Apellido,b.Titulo FROM Autores a INNER JOIN Libros b ON a.Id_autor = b.fk_Id_autor WHERE  Id_autor=? ");
        $query->execute(array($Id_autor));
        $items=$query->fetchAll((PDO::FETCH_OBJ));
        return $items;
    }
}
<?php

class librosModel
{
    private $dbLibros;
    function __construct()
    {
        $this->dbLibros =new PDO('mysql:host=localhost;'.'dbname=db_TPEspecial;charset=utf8', 'root', '');
    }
    function getBooks(){
        $query = $this->dbLibros->prepare("SELECT * FROM Libros");
        $query->execute();
        $books = $query->fetchAll(PDO::FETCH_OBJ);
        return $books;
    }
    function getBook($id){
        $sentencia = $this->dbLibros->prepare("SELECT * FROM Libros WHERE id_libros=?");
        $sentencia->execute(array($id));
        $book = $sentencia->fetch(PDO::FETCH_OBJ);
        return $book;
    }
    function getLibrosGenero($genero){
        $sentencia = $this->dbLibros->prepare("SELECT * from Libros WHERE Genero = '$genero'");
        $sentencia->execute();
        $gen = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $gen;
    }
    
}

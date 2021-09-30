<?php

class librosModel
{
    private $dbLibros;
    private $dbAutores;
    function __construct()
    {
        $this->dbAutores = new PDO('mysql:host=localhost;'.'dbname=db_TPespecial;charset=utf8', 'root', '');
        $this->dbLibros =new PDO('mysql:host=localhost;'.'dbname=db_TPespecial;charset=utf8', 'root', '');
    }
    function getBooks(){
        $query = $this->dbLibros->prepare('SELECT * FROM Libros');
        $query->execute();
        $books = $query->fetchAll(PDO::FETCH_OBJ);
        return $books;
    }
    function getAutores(){
        $query = $this->dbAutores->prepare('SELECT * FROM Autores');
        $query->execute();
        $autores = $query->fetchALL(PDO::FETCH_OBJ);
        var_dump($autores);
        return $autores;
    }

    function Join(){
        
    }
}

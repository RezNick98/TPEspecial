<?php

class librosModel
{
    private $dbLibros;
    private $dbAutores;
    function __construct()
    {
        $this->dbLibros =new PDO('mysql:host=localhost;'.'dbname=db_TPespecial;charset=utf8', 'root', '');
        $this->dbAutores=new PDO('mysql:host=localhost;'.'dbname=db_TPespecial;charset=utf8', 'root', '');
    }
    function getBooks(){
        $query = $this->dbLibros->prepare('SELECT * FROM Libros');
        $query->execute();
        $books = $query->fetchAll(PDO::FETCH_OBJ);
        return $books;
    }
    function getAutores(){
        $autor = $this->dbAutores->prepare('SELECT * FROM Autores');
        $autor->execute();
        $autores = $autor->fetchALL(PDO::FETCH_OBJ);
        return $autores;
    }   
}

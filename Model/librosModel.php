<?php

class librosModel
{
    private $dbLibros;
    function __construct()
    {
        $this->dbLibros =new PDO('mysql:host=localhost;'.'dbname=db_TPespecial;charset=utf8', 'root', '');
    }
    function getBooks(){
        $query = $this->dbLibros->prepare('SELECT * FROM Libros');
        $query->execute();
        $books = $query->fetchAll(PDO::FETCH_OBJ);
        return $books;
    }
}

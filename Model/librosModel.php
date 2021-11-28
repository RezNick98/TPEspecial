<?php

class LibrosModel
{
    private $dbLibros;
    function __construct()
    {
        $this->dbLibros =new PDO('mysql:host=localhost;'.'dbname=db_TPEspecial;charset=utf8', 'root', '');
    }
    function getBooks(){
        $query = $this->dbLibros->prepare("SELECT  a.Nombre,a.Apellido,a.Id_autor,b.Titulo,b.Genero,b.Descripcion,b.id_libros,b.fk_Id_autor FROM Autores a INNER JOIN Libros b ON a.Id_autor = b.fk_Id_autor");
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
    function getGenProm(){
        $sentencia = $this->dbLibros->prepare("SELECT Genero, COUNT(*) AS total FROM Libros GROUP BY genero");
        $sentencia->execute();
        $genero = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $genero;
    }
    function getLibrosGenero($genero){
        $sentencia = $this->dbLibros->prepare("SELECT * from Libros WHERE Genero = '$genero'");
        $sentencia->execute();
        $gen = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $gen;
    }
    function createBook($titulo, $genero, $descripcion, $id_autor){
        $sentencia = $this->dbLibros->prepare("INSERT INTO Libros(titulo, genero, descripcion, fk_Id_autor) VALUES(?, ?, ?, ?)");
        $sentencia->execute(array($titulo, $genero, $descripcion, $id_autor));
    }
    function deleteBook($id){
        $sentencia = $this->dbLibros->prepare("DELETE FROM Libros WHERE id_libros=?");
        $sentencia->execute(array($id));
    }
    function updateBook($titulo, $genero, $descripcion, $id_libro){
        $sentencia = $this->dbLibros->prepare("UPDATE Libros SET Titulo = '$titulo', Genero = '$genero', Descripcion = '$descripcion' WHERE id_libros = $id_libro");
        $sentencia->execute();
    }
    
}

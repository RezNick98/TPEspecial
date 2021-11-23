<?php

class comentariosModel{

    private $dbComentarios;

    function __construct(){
        $this->dbComentarios =new PDO('mysql:host=localhost;'.'dbname=db_tpespecial;charset=utf8', 'root', '');        
    }

    function getComentariosConUsuario($id){
        $sentencia = $this->dbComentarios->prepare("SELECT * FROM comentarios JOIN usuario ON comentarios.Id_usuariofk = usuario.Id_usuario WHERE Id_librofk=?");
        $sentencia->execute(array($id));
        $coments = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $coments;
    }

    function getComent($id){
        $sentencia = $this->dbComentarios->prepare("SELECT * FROM comentarios WHERE Id_comentario=?");
        $sentencia->execute(array($id));
        $coment = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $coment;
    }

    function deleteComent($id){
        $sentencia = $this->dbComentarios->prepare("DELETE FROM comentarios WHERE Id_comentario=?");
        $sentencia->execute(array($id));
    }

    function addComent($Id_usuariofk, $Comentario, $Puntaje, $Id_librofk){
        $sentencia = $this->dbComentarios->prepare("INSERT INTO comentarios(Id_usuariofk, Comentario, Puntaje, Id_librofk) VALUES(?, ?, ?, ?)");
        $sentencia->execute(array($Id_usuariofk, $Comentario, $Puntaje, $Id_librofk));
        return $this->dbComentarios->lastInsertId();
    }

    function updateComent($idComent, $comentario, $puntaje){
        $sentencia = $this->dbComentarios->prepare("UPDATE comentarios SET Comentario = ?, Puntaje = ? WHERE Id_Comentario=?");
        $sentencia->execute(array($comentario, $puntaje, $idComent));
    }
}
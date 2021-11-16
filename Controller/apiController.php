<?php
require_once './Model/librosModel.php';
require_once './Model/autoresModel.php';
require_once './View/apiView.php';
class apiController{
    private $modelLibros;
    private $modelAutores;
    private $view;
    function __construct(){
        $this->modelLibros = new librosModel();
        $this->modelAutores = new autoresModel();
        $this->view = new apiView();
    }
    function showBooks($params = []){
        $books = $this->modelLibros->getBooks();
        return $this->view->response($books,200);
    }
    function showAutors($params = []){
        $autors = $this->modelAutores->getAutors();
        return $this->view->response($autors,200);
    }
    function showGenres($params = []){
        $generos = $this->modelLibros->getBooks();
        return $this->view->response($generos,200);
    }

}
<?php
require_once './Model/librosModel.php';
require_once './Model/autoresModel.php';
require_once './View/homeView.php';

class Controller{
    private $modelLibros;
    private $modelAutores;
    private $view;
    function __construct()
    {
        $this->modelLibros = new librosModel();
        $this->modelAutores = new autoresModel();
        $this->view = new HomeView();
    }

    function showHome(){
        $books = $this->modelLibros->getBooks();
        $autors = $this->modelAutores->getAutors();
        $this->view->showHome($books, $autors);
    }

    function showBooks(){
        $books = $this->modelLibros->getBooks();
        $this->view->showBooks($books);
    }
    function showAutors(){
        $autors = $this->modelAutores->getAutors();
        $this->view->showAutors($autors);
    }
    function insertAutor(){
        $this->modelAutores->insertAutor($_POST['Id_autor'],$_POST['Nombre'],$_POST['Apellido']);
        $this->view->addAutor();
    }
    function showBooksByAutor($Id_autor){
        $items=$this->modelAutores->Join($Id_autor);
        $this->view->showBooksAutor($items);
    }

}

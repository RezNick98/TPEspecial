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
    function showBooksByAutor($Id_autor){
        $itemsAutor=$this->modelAutores->getAutor($Id_autor);
        $this->view->showBooksAutor($itemsAutor);
    }
    function showBooksByTabla($id_libro){
        $item = $this->modelLibros->getBook($id_libro);
        $this->view->showBookLibro($item);
    }
    function showBooksByGenero($genero){
        $gen = $this->modelLibros->getLibrosGenero($genero);
        $this->view->showBooksGenero($gen);
    }

}

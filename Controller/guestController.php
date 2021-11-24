<?php
require_once './Model/LibrosModel.php';
require_once './Model/AutoresModel.php';
require_once './View/GuestView.php';

class GuestController{
    private $modelLibros;
    private $modelAutores;
    private $view;
    function __construct()
    {
        $this->modelLibros = new LibrosModel();
        $this->modelAutores=new AutoresModel();
        $this->view = new GuestView();
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
        $this->view->showBook($item);
    }
    function showBooksByGenero($genero){
        $gen = $this->modelLibros->getLibrosGenero($genero);
        $this->view->showBooksGenero($gen);
    }
 }

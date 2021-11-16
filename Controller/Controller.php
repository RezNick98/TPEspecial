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

        $genero = $this->modelLibros->getGenProm();
        $books = $this->modelLibros->getBooks();
        $autors = $this->modelAutores->getAutors();
        $this->view->showHome($books, $autors, $genero);
    }
    function showBooksByAutor($Id_autor){
        $this->checkLoggedIn();

        $itemsAutor=$this->modelAutores->getAutor($Id_autor);
        $this->view->showBooksAutor($itemsAutor);
    }
    function showBooksByTabla($id_libro){
        $this->checkLoggedIn();

        $item = $this->modelLibros->getBook($id_libro);
        $this->view->showBook($item);
    }
    function showBooksByGenero($genero){
        $this->checkLoggedIn();

        $gen = $this->modelLibros->getLibrosGenero($genero);
        $this->view->showBooksGenero($gen);
    }
    function agregarLibro(){
        $this->checkLoggedIn();

        $this->modelLibros->createBook($_POST['titulo'], $_POST['genero'], $_POST['texto'], $_POST['select']);
        $this->view->showHomeLocation();
    }
    function deleteBook($id){
        $this->checkLoggedIn();

        $this->modelLibros->deleteBook($id);
        $this->view->showHomeLocation();
    }
    function updateBook(){
        $this->checkLoggedIn();

        $this->modelLibros->updateBook($_POST['titulo'], $_POST['genero'], $_POST['texto'], $_POST['select']);
        $this->view->showHomeLocation();
    }

    function checkLoggedIn(){
        session_start();

        if(!isset($_SESSION["Email"])){
            header("Location: ".BASE_URL."login");
            die();
        }
    }

}

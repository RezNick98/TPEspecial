<?php
require_once './Model/librosModel.php';
require_once './Model/autoresModel.php';
require_once './View/homeView.php';
require_once './Helper/authHelper.php';

class Controller{
    private $modelLibros;
    private $modelAutores;
    private $view;
    private $authHelper;
    function __construct()
    {
        $this->modelLibros = new librosModel();
        $this->modelAutores = new autoresModel();
        $this->view = new HomeView();
        $this->authHelper = new authHelper();
    }

    function showHome(){
        $genero = $this->modelLibros->getGenProm();
        $books = $this->modelLibros->getBooks();
        $autors = $this->modelAutores->getAutors();
        $rol = $this->authHelper->checkRol();
        $this->view->showHome($books, $autors, $genero,$rol);
    }
    function showBooksByTabla($id_libro){
        $id = $this->authHelper->returnUserId();
        $item = $this->modelLibros->getBook($id_libro);
        $this->view->showBook($item, $id);
    }
    function showBooksByAutor($Id_autor){
        $itemsAutor=$this->modelAutores->getAutor($Id_autor);
        $this->view->showBooksAutor($itemsAutor);
    }
    function showBooksByGenero($genero){
        $gen = $this->modelLibros->getLibrosGenero($genero);
        $this->view->showBooksGenero($gen);
    }
    function agregarLibro(){
        $this->authHelper->checkAdminLoggedIn();
        $this->modelLibros->createBook($_POST['titulo'], $_POST['genero'], $_POST['texto'], $_POST['select']);
        $this->view->showHomeLocation();
    }
    function deleteBook($id){
        $this->authHelper->checkAdminLoggedIn();
        $this->modelLibros->deleteBook($id);
        $this->view->showHomeLocation();
    }
    function updateBook(){
        $this->authHelper->checkAdminLoggedIn();
        $this->modelLibros->updateBook($_POST['titulo'], $_POST['genero'], $_POST['texto'], $_POST['select']);
        $this->view->showHomeLocation();
    }

}

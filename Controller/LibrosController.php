<?php
require_once './Model/LibrosModel.php';
require_once './View/LibrosView.php';
require_once './Helper/AuthHelper.php';

class LibrosController{
    private $modelLibros;
    private $view;
    private $authHelper;
    function __construct()
    {
        $this->modelLibros = new LibrosModel();
        $this->view = new LibrosView();
        $this->authHelper = new AuthHelper();
    }

    function showHome(){
        $genero = $this->modelLibros->getGenProm();
        $books = $this->modelLibros->getBooks();
        $rol = $this->authHelper->checkRol();
        $this->view->showHome($books, $genero,$rol);
    }
    function showBooksByTabla($id_libro){
        $item = $this->modelLibros->getBook($id_libro);
        $user = $this->authHelper->returnUserIdAndRol();
        $this->view->showBook($item, $user);
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

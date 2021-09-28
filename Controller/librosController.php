<?php
require_once './Model/librosModel.php';
require_once './View/librosView.php';
class librosController
{
    private $model;
    private $view;
    function __construct()
    {
        $this->model = new librosModel();
        $this->view = new librosView();
    }
    function showBooks(){
        $books = $this->model->getBooks();
        $this->view->getBooks($books);
    }
    function showAutor(){
        $autores = $this->model->getAutores();
        $this->view->getAutor($autores);
    }    
}
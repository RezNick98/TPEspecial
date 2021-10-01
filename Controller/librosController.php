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
    function showHome(){
        $this->view->showHome();
    }
    function showBooks(){
        $books = $this->model->getBooks();
        $this->view->showBooks($books);
    }
}

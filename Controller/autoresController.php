<?php
require_once "Model/autoresModel.php";
require_once "View/autorsView.php";
class autoresController
{
    private $model;
    private $view;
    function __construct()
    {
        $this->model= new autoresModel();
        $this->view = new autorsView();
    }
    
    function showAutors(){
        $autors = $this->model->getAutors();
        $this->view->showAutors($autors);
    }
    function filterAutors(){
        
    }
}

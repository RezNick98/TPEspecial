<?php
require_once "Model/autoresModel.php";
require_once "View/librosView.php";
class autoresController
{
    private $model;
    private $view;
    function __construct()
    {
        $this->model= new autoresModel();
        $this->view = new librosView();
    }
    function showAutors(){

    }
}

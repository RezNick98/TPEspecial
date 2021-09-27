<?php
class librosController
{
    private $model;
    private $view;
    function __construct()
    {
        $this->model = new librosModel();
        $this->view = new librosView();
    }    
}

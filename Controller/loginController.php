<?php
require_once './Model/loginModel.php';
require_once './View/homeView.php';
class loginController
{
    private $loginModel;
    private $loginView;
    function __construct()
    {
        $this->loginModel = new loginModel();
        $this->view = new homeView();
    } 

    function registerUser($Email,$Password){
       $this->loginModel->registerUser($Email,$Password);
       

    }
}

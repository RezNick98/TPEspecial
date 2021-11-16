<?php
require_once './Model/userModel.php';
require_once './View/registerView.php';
class registerController
{
    private $userModel;
    private $registerView;
    function __construct()
    {
        $this->userModel = new userModel();
        $this->loginView = new loginView();
        $this->registerView = new registerView();
    }   
        function createAccount(){
        if(!empty($_POST['Email'])  &&  !empty($_POST['Password']) && !empty($_POST['Nombreusuario'])){
           $this->userModel->createUser($_POST['Email'],$_POST['Password'],$_POST['Nombreusuario']);
           header("Location:".BASE_URL."newRegister");
        }
    }
    function register(){
        $this->registerView->showRegister();
    }
}
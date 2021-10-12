<?php
require_once './Model/userModel.php';
require_once './View/loginView.php';
require_once './View/registerView.php';
class userController
{
    private $userModel;
    private $loginView;
    private $registerView;
    function __construct()
    {
        $this->userModel = new userModel();
        $this->loginView = new loginView();
        $this->registerView = new registerView();
    } 
    function login(){
        $this->loginView->showLogin();
    }
    function logout(){
        session_start();
        session_destroy();
        $this->loginView->showLogin("Goodbye :)");
    }
    function register(){
        $this->registerView->showRegister();
    }
    function createAccount(){
        if(!empty($_POST['Email'])  &&  !empty($_POST['Password'])){
           $this->userModel->createUser($_POST['Email'],$_POST['Password']);
           $this->loginView->showLogin();
        }
    }
    function verifyLogin(){
        if(!empty($_POST['Email']) && !empty($_POST['Password'])){
            $Email=$_POST['Email'];
            $Password=$_POST['Password'];
            $user = $this->userModel->getUser($Email);
            if($user && password_verify ($Password ,($user->Password ))){
                session_start();
                $_SESSION["Email"]=$Email;
                $this->loginView->showHome();
            }else{
                $this->loginView->showLogin("Acceso denegado");
            }
        }
    }
}


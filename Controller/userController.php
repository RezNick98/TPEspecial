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
        if(!empty($_POST['Email'])  &&  !empty($_POST['Password']) && !empty($_POST['Nombreusuario'])){
           $this->userModel->createUser($_POST['Email'],$_POST['Password'],$_POST['Nombreusuario']);
           $this->loginView->showHome();
        }
    }
    function verifyLogin(){
        if(!empty($_POST['Email']) && !empty($_POST['Password']) && !empty($_POST['Nombreusuario'])){
            $Email=$_POST['Email'];
            $Password=$_POST['Password'];
            $usuario = $_POST['Nombreusuario'];
            $userMail = $this->userModel->getUserMail($Email);
            $user = $this->userModel->getUser($usuario);
            if($user && $userMail && password_verify ($Password ,($user->Password ))){
                session_start();
                $_SESSION["Email"]=$Email;
                $_SESSION["Nombreusuario"]=$user;
                $this->loginView->showHome();
            }else{
                $this->loginView->showLogin("Acceso denegado");
            }
        }
    }
}


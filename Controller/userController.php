<?php
require_once './Model/userModel.php';
require_once './View/loginView.php';
class userController
{
    private $userModel;
    private $loginView;
    function __construct()
    {
        $this->userModel = new userModel();
        $this->loginView = new loginView();
    } 
    function login(){
        $this->loginView->showLogin();
    }
    function verifyLogin(){
        if(!empty($_POST['Email']) && !empty($_POST['Password'])){
            $Email=$_POST['Email'];
            $Password=$_POST['Password'];
            $user = $this->userModel->getUser($Email);
            if($user && password_verify($Password,$user->Password)){
                session_start();
                $_SESSION["Email"]=$Email;
                $this->loginView->showHome();
            }else{
                $this->loginView->showLogin("Acceso denegado");
            }
        }
    }
}

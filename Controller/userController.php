<?php
require_once './Model/UserModel.php';
require_once './View/LoginView.php';
require_once './View/RegisterView.php';
class UserController
{
    private $userModel;
    private $loginView;
    private $registerView;
    function __construct()
    {
        $this->userModel = new UserModel();
        $this->loginView = new LoginView();
        $this->registerView = new RegisterView();

    } 
    function login(){
        $this->loginView->showLogin();
    }
    function logout(){
        session_start();
        session_destroy();
        $this->loginView->showLogin("Goodbye :)");
    }
    function createAccount(){
        if(!empty($_POST['Email']) && !empty($_POST['Password']) && !empty($_POST['Nombreusuario'])){
            $userEmail = $_POST['Email'];
            $Password = password_hash($_POST['Password'], PASSWORD_BCRYPT);
            $username = $_POST['Nombreusuario'];
            
            $this->userModel->createUser($userEmail, $Password,$username);
            $user = $this->userModel->getUser($username, $userEmail);
            
            session_start();
            $_SESSION['email'] = $userEmail;
            $_SESSION['admin'] = $user->admin;
            $_SESSION['id_usuario'] = $user->Id_usuario;
            $this->loginView->showHome();
            
        }
    }
    function register(){
        $this->registerView->showRegister();
    }
    function verifyLogin(){
        $Email=$_POST['Email'];
        $Password=$_POST['Password'];
        $usuario = $_POST['Nombreusuario'];
        $userMail = $this->userModel->getUserMail($Email);
        $user = $this->userModel->getUser($usuario, $Email);
        if(!empty($_POST['Email']) && !empty($_POST['Password']) && !empty($_POST['Nombreusuario'])){
            if($user && $userMail && password_verify ($Password ,($user->Password ))){
                session_start();
                $_SESSION["Email"]=$Email;
                $_SESSION["Nombreusuario"]=$user;
                $_SESSION['admin'] = $user->admin;
                $_SESSION['id_usuario'] = $user->Id_usuario;
                $this->loginView->showHome();
            }else{
                $this->loginView->showLogin("Acceso denegado");
            }
        }
    }
}


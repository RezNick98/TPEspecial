<?php
require_once './View/adminView.php';
require_once './Model/userModel.php';
require_once './Helper/authHelper.php';
class adminController
{
 private $view;
 private $model;
 private $authHelper;
 function __construct()
 {
  $this->view = new adminView();
  $this->model = new userModel();
  $this->authHelper = new authHelper();   
 }   
function showAdmin(){
    $rol = $this->authHelper->checkAdminLoggedIn();
    $usuarios = $this->model->getAllUsers();
    $this->view->showUsuarios($usuarios,$rol);
}
function addAdmin($Id_usuario){
    $this->authHelper->checkAdminLoggedIn();
    $this->model->fromUserToAdmin($Id_usuario);
    $this->view->showAdminViewLocation();
}
function removeAdmin($Id_usuario){
    $this->authHelper->checkAdminLoggedIn();
    $this->model->fromAdminToUSer($Id_usuario);
    $this->view->showAdminViewLocation();

}

function deleteUsuario($Id_usuario){
    $this->authHelper->checkAdminLoggedIn();
    $this->model->deleteUser($Id_usuario);
    $this->view->showAdminViewLocation();
}
}

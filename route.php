<?php
require_once 'Controller/Controller.php';
require_once 'Controller/userController.php';
require_once 'Controller/guestController.php';
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':'.$_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
if(!empty($_GET['action'])){
    $action = $_GET['action'];
}else{
    $action='home';
}

$Controller = new Controller();
$userController=new userController();
$guestController = new  guestController();

$params = explode('/',$action);
var_dump($params);
switch ($params[0]) {
    case 'login':
        $userController->login();
        break;
    case 'logout':
        $userController->logout();
        break;
    case 'register':
        $userController->register();
        break;
    case 'createAccount':
        $userController->createAccount();
        break;
    case 'verificar':
        $userController->verifyLogin();
        break;
    case 'home':
        $Controller->showHome();
        break;
    case 'autorLibros':
        $Controller->showBooksByAutor($params[1]);
        break;
    case 'viewDescripcion':
        $Controller->showBooksByTabla($params[1]);
        break;
    case 'generosLibros':
        $Controller->showBooksByGenero($params[1]);
        break;
    case 'reseña':
        $Controller->addReseña();
        break;
    case 'guest':
        $guestController->showHome();
        break;
    case 'guestLibro':
        $guestController->showBooksByAutor($params[1]);
        break;
    case 'guestGenres':
        $guestController->showBooksByGenero($params[1]);
        break;
    case 'guestBook':
        $guestController->showBooksByTabla($params[1]);
        break;
    default:
        echo ('ERROR 404 not found');
        break;
}
                                
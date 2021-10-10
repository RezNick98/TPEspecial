<?php
require_once 'Controller/Controller.php';
require_once 'Controller/loginController.php';
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':'.$_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
if(!empty($_GET['action'])){
    $action = $_GET['action'];
}else{
    $action='home';
}

$Controller = new Controller();
$loginController = new loginController();


$params = explode('/',$action);
var_dump($params);
switch ($params[0]) {
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
    default:
        echo ('ERROR 404 not found');
        break;
}

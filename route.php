<?php
require_once 'Controller/librosController.php';
require_once 'Controller/autoresController.php';
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':'.$_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
if(!empty($_GET['action'])){
    $action = $_GET['action'];
}else{
    $action='home';
}

$librosController = new librosController();
$autoresController = new autoresController();

$params = explode('/',$action);

switch ($params[0]) {
    case 'home':
        $librosController->showBooks();
        $autoresController->showAutors();
        break;
        case 'filterAutor':
            if (isset($params[1])) {
                $autoresController->filterAutors($params[1]);
                $librosController->showBooks();
            } else {
                $librosController->showBooks();
            }
            
    break;
    default:
        echo ('ERROR 404 not found');
        break;
}

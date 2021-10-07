<?php
require_once 'Controller/Controller.php';
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':'.$_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
if(!empty($_GET['action'])){
    $action = $_GET['action'];
}else{
    $action='home';
}

$Controller = new Controller();


$params = explode('/',$action);

switch ($params[0]) {
    case 'home':
        $Controller->showHome();
        break;
        case 'filterAutor':
        break;
    default:
        echo ('ERROR 404 not found');
        break;
}

<?php
require_once 'Controller/librosController.php';
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':'.$_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
if(!empty($_GET['action'])){
    $action = $_GET['action'];
}else{
    $action='home';
}

$librosController = new librosController();
$params = explode('/',$action);

switch ($params[0]) {
    case 'home':
        
        break;
    
    default:
        # code...
        break;
}

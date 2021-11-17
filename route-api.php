<?php
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':'.$_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
require_once './libs/Router.php';
require_once './Controller/Controller.php';
$router =new Router();

$router->addRoute('home','GET','Controller','showHome');    
$router->route($_GET["resource"],$_SERVER['REQUEST_METHOD']);
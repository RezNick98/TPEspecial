<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';
class loginView
{
    private $smarty;
    function __construct()
    {
        $this->smarty = new Smarty();
    }
    function showLogin($error = ""){
        $this->smarty->assign('titulo','login');
        $this->smarty->assign('error',$error);
        $this->smarty->display('templates/login.tpl');
    }
    function showRegister(){
        $this->smarty->assign('titulo','register');
        $this->smarty->display('templates/register.tpl');
    }
    function showHome(){
        header("Location:".BASE_URL."home");
    }

}

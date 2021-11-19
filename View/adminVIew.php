<?php
require_once "libs/smarty-3.1.39/libs/Smarty.class.php";

class adminView{
    private $smarty;
    function __construct()
    {
     $this->smarty = new Smarty();   
    }
    
    public function showUsuarios($usuarios,$rol){
        $this->smarty->assign('usuarios',$usuarios);
        $this->smarty->assign('rol',$rol);
        $this->smarty->display('templates/admin.tpl');


    }
    function showAdminViewLocation(){
        header("Location:".BASE_URL."adminView");
    }
}
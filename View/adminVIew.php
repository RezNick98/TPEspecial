<?php
require_once "libs/smarty-3.1.39/libs/Smarty.class.php";

class adminView{
    private $smarty;
    function __construct()
    {
     $this->smarty = new Smarty();   
    }
    function showAdminView($usuario,$admin){
        $this->smarty->assign('usuario',$usuario);
        $this->smarty->assign('admin',$admin);
        $this->smarty->display("templates/admin.tpl");
    }
    function showAdminViewLocation(){
        header("Location:".BASE_URL."admin");
    }

}
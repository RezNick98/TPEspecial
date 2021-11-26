<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class LibrosView{
    private $smarty;
    function __construct()
    {
        $this->smarty = new Smarty();
    }

    function showHomeLocation(){
        header("Location: ".BASE_URL."home");
    }
    function showHome($books, $genero, $rol){
        $this->smarty->assign('genero', $genero);
        $this->smarty->assign('books', $books);
        $this->smarty->assign('rol',$rol);
        $this->smarty->display('templates/libros.tpl');
    }
    function showBooks($books){
        $this->smarty->assign('books', $books);
        $this->smarty->display('templates/libro.tpl');
    }
    function showAutors($autors){
        $this->smarty->assign('autors', $autors);
        $this->smarty->display('templates/libros.tpl');
    }
    
    function showBook($item, $id){
        $this->smarty->assign('id', $id);
        $this->smarty->assign('item',$item);
        $this->smarty->display('templates/libro.tpl');
    }
    function showBooksGenero($genero){
        $this->smarty->assign('genero', $genero);
        $this->smarty->display('templates/genero.tpl');
    }

}
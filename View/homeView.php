<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class homeView{
    private $smarty;
    function __construct()
    {
        $this->smarty = new Smarty();
    }

    function showHome($books, $autors){
        $this->smarty->assign('books', $books);
        $this->smarty->assign('autors', $autors);
        $this->smarty->display('templates/libros.tpl');
    }
    function showBooks($books){
        $this->smarty->assign('books', $books);
        $this->smarty->display('templates/libros.tpl');
    }
    function showAutors($autors){
        $this->smarty->assign('autors', $autors);
        $this->smarty->display('templates/libros.tpl');
    }
    function showBooksAutor($items){
        $this->smarty->assign('items',$items);
        $this->smarty->display('templates/autorAndBooks.tpl');
    }
    function showBookLibro($item){
        $this->smarty->assign('item',$item);
        $this->smarty->display('templates/libro.tpl');
    }
    function showBooksGenero($genero){
        $this->smarty->assign('genero', $genero);
        $this->smarty->display('templates/genero.tpl');
    }
}
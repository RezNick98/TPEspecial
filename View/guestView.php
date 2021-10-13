<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class guestView{
    private $smarty;
    function __construct()
    {
        $this->smarty = new Smarty();
    }

    function showHome($books, $autors){
        $this->smarty->assign('books', $books);
        $this->smarty->assign('autors', $autors);
        $this->smarty->display('templates/guest.tpl');
    }
    function showBooks($books){
        $this->smarty->assign('books', $books);
        $this->smarty->display('templates/guestBook.tpl');
    }
    function showAutors($autors){
        $this->smarty->assign('autors', $autors);
        $this->smarty->display('templates/guest.tpl');
    }
    function showBooksAutor($items){
        $this->smarty->assign('items',$items);
        $this->smarty->display('templates/guestAutorBooks.tpl');
    }
    function showBook($item){
        $this->smarty->assign('item',$item);
        $this->smarty->display('templates/guestBook.tpl');
    }
    function showBooksGenero($genero){
        $this->smarty->assign('genero', $genero);
        $this->smarty->display('templates/guestGenres.tpl');
    }
}
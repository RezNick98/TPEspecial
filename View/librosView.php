<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';
class librosView
{
    private $smarty;
    function __construct()
    {
        $this->smarty = new Smarty();
    }
    function showHome(){
        '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Libros</title>
            <base href="'.BASE_URL.'">
        </head>
        <body>
        </body>
        </html>';
    }
    function showBooks($books){
        echo '<table>';
            echo '<tr>';
                echo '<th>'.'Id del libro '.'</th>';
                echo '<th>'.'Titulo '.'</th>';
                echo '<th>'.'Genero '.'</th>';
                echo '<th>'.'Descripcion '.'</th>';
            echo '</tr>';
            foreach ($books as $book) {
                echo '<tr>';
                    echo '<td>'.$book->id_libros.'</td>';
                    echo '<td>'.$book->Titulo.'</td>';
                    echo '<td>'.$book->Genero.'</td>';
                    echo '<td>'.$book->Descripcion.'</td>';
                echo '</tr>';
            }
        echo '</table>';
            }
            function showAutors($autors){
                
            }
        }
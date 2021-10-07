<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';
class autorsView
{
    private $smarty;
    function __construct()
    {
        $this->smarty=new Smarty();
    }
    function showAutors($autors){
        echo "<form action=filterAutor method=POST>";
            echo '<select>';
                foreach ($autors as $autor) {
                    echo "<option>".$autor->Nombre.' '.$autor->Apellido."</option>";
                }
            echo'</select>';
            echo "<input type='submit' value='Filtrar' name='Filtrar'>";
        echo "</form>";
    }
}

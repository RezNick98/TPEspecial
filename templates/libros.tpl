{include file="templates/header.tpl"}

<nav class="nav">
    <p>Autores: 
    {foreach from=$autors item=$autor}    
        <a class="btn btn-secondary mt-2 mb-2" href="autorLibros/{$autor->Id_autor}">{$autor->Nombre} {$autor->Apellido}</a>
    {/foreach}
    </p>
    <p>Generos: 
    {foreach from=$books item=$book}
        <a class="btn btn-secondary mt-2 mb-2" href="generosLibros/{$book->Genero}">{$book->Genero}</a>
    {/foreach}
    </p>
</nav>

<table  class="table table-dark table-hover">
        <thead>
            <th>Titulo</th>
            <th>Genero</th>
            <th>Descripcion</th>
            <th></th>
        </thead>
        <tbody>
        {foreach from=$books item=$book}       
            <tr>
                <td>{$book->Titulo|upper}</td>
                <td>{$book->Genero}</td>
                <td>{$book->Descripcion|truncate:10}</td>
                <td> <a class="btn btn-warning" href="viewDescripcion/{$book->id_libros}">Leer mas...</a> </td>
            </tr>
        {/foreach}
    </tbody>
</table>

<form action="reseña" method="post">
        <p>Nombre: <input type="text" name="nombre"></p>
        <p>Reseña: <textarea name="texto"cols="30" rows="1"></textarea></p>
    <select name="select">
        {foreach from=$autors item=$autor}    
            <option value="{$autor->Id_autor}">{$autor->Nombre} {$autor->Apellido}</option>
        {/foreach}
    </select>
        <input type="submit" value="Enviar">
</form>

{include file="templates/footer.tpl"}
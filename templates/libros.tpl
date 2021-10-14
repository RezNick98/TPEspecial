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
    <p> Login:
      <a class="btn btn-secondary mt-2 mb-2" href="login">Login</a>
      </p>
    <p> Logout:
        <a class="btn btn-secondary mt-2 mb-2" href="logout">Logout</a>
    </p>
</nav>

<table  class="table table-dark table-hover">
        <thead>
            <th>Titulo</th>
            <th>Genero</th>
            <th>Descripcion</th>
            <th><hr/></th>
            <th>Eliminar</th>
        </thead>
        <tbody>
        {foreach from=$books item=$book}       
            <tr>
                <td>{$book->Titulo|upper}</td>
                <td>{$book->Genero}</td>
                <td>{$book->Descripcion|truncate:10}</td>
                <td> <a class="btn btn-info" href="viewDescripcion/{$book->id_libros}">Leer mas...</a> </td>
                <td> <a class="btn btn-danger" href="deleteBook/{$book->id_libros}">Eliminar</a> </td>
            </tr>
        {/foreach}
    </tbody>
</table>

<form action="agregarLibro" method="POST">
         <label>TItulo: </label><input type="text" name="titulo">
        <label>Genero: </label> <input type="text" name="genero">
        <label>Descripcion: </label> <textarea name="texto"cols="30" rows="1"></textarea>
    <select name="select">
        {foreach from=$autors item=$autor}    
            <option value="{$autor->Id_autor}">{$autor->Nombre} {$autor->Apellido}</option>
        {/foreach}
    </select>
        <input class="btn btn-success" type="submit" value="Enviar">
</form>

<form action="updateBook" method="POST">
         <label>TItulo: </label><input type="text" name="titulo">
        <label>Genero: </label> <input type="text" name="genero">
        <label>Descripcion: </label> <textarea name="texto"cols="30" rows="1"></textarea>
    <select name="select">
        {foreach from=$books item=$book}    
            <option value="{$book->id_libros}">{$book->Titulo}</option>
        {/foreach}
    </select>
        <input class="btn btn-success" type="submit" value="Modificar">
</form>

{include file="templates/footer.tpl"}
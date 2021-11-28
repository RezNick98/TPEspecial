{include file="templates/header.tpl"}

<nav class="nav">
    <p>
        <a class="btn btn-secondary mt-2 mb-2" href="autores">Autores</a>
    </p>
    <p>Generos:
    {foreach from=$genero item=$gen}
        <a class="btn btn-secondary mt-2 mb-2" href="generosLibros/{$gen->Genero}">{$gen->Genero}</a>
    {/foreach}
    </p>
    <p> Login:
      <a class="btn btn-secondary mt-2 mb-2" href="login">Login</a>
    </p>
    <p> Logout:
        <a class="btn btn-secondary mt-2 mb-2" href="logout">Logout</a>
    </p>
    {if $rolAndId[1] == 1}
        <p> admin:
            <a class="btn btn-secondary mt-2 mb-2" href="adminView">Admin</a>
        </p>
    {/if}
</nav>

<table  class="table table-dark table-hover">
        <thead>
            <th>Titulo</th>
            <th>Genero</th>
            <th>Descripcion</th>
            <th><hr/></th>
            {if $rolAndId[1] == 1}
                <th>Eliminar</th>
            {/if}
        </thead>
        <tbody>
        {foreach from=$books item=$book}       
            <tr>
                <td>{$book->Titulo|upper}</td>
                <td>{$book->Genero}</td>
                <td>{$book->Descripcion|truncate:10}</td>
                <td> <a class="btn btn-info" href="viewDescripcion/{$book->id_libros}">Leer mas...</a> </td>
                {if $rolAndId[1] == 1}
                    <td> <a class="btn btn-danger" href="deleteBook/{$book->id_libros}">Eliminar</a> </td>
                {/if}
            </tr>
        {/foreach}
    </tbody>
</table>

<<<<<<< HEAD
{if $rolAndId[1] == 1}

    <form action="agregarLibro" method="POST">
            <label>TItulo: </label><input type="text" name="titulo">
            <label>Genero: </label> <input type="text" name="genero">
            <label>Descripcion: </label> <textarea name="texto"cols="30" rows="1"></textarea>
            <label>Numero del autor</label>
        <select name="select">
            {foreach from=$books item=$book}    
                <option value="{$book->fk_Id_autor}">{$book->Id_autor}</option>
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
{/if}
=======
<form action="agregarLibro" method="POST">
         <label>Titulo: </label><input type="text" name="titulo">
        <label>Genero: </label> <input type="text" name="genero">
        <label>Descripcion: </label> <textarea name="texto"cols="30" rows="1"></textarea>
        <label>Numero del autor</label>
    <select name="select">
        {foreach from=$books item=$book}    
            <option>{$book->fk_Id_autor}</option>
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
            <option>{$book->Titulo}</option>
        {/foreach}
    </select>
        <input class="btn btn-success" type="submit" value="Modificar">
</form>
>>>>>>> e151cbb1b4156017e2c0b22a58dc68a4b86d9834

{include file="templates/footer.tpl"}
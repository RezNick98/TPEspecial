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
{include file="templates/footer.tpl"}
{include file="templates/header.tpl"}

<table class="table table-dark table-striped">
        <tr>
            <th>Titulo</th>
            <th>Genero</th>
            <th>Descripcion</th>
        </tr>
        {foreach from=$books item=$book}
        <tr>
            <td>{$book->Titulo}</td>
            <td>{$book->Genero}</td>
            <td>{$book->Descripcion}</td>
        </tr>
        {/foreach}
</table>

<form action="filterAutor" method="POST">
        <select class="form-select mt-2" aria-label="Disabled select example">
        {foreach from=$autors item=$autor key=key name=name}    
            <option>{$autor->Apellido}, {$autor->Nombre}</option>
        {/foreach}
        </select>
        <input class="btn btn-outline-secondary mt-2" type="submit" name="Filtrar" value="Filtrar">
</form>

{include file="templates/footer.tpl"}
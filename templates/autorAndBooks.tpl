{include file="templates/header.tpl"}

<table class="table table-dark table-striped">
        <tr>
            <th>Autor</th>
            <th>Libro</th>
            <th>Genero</th>
            <th>Descripcion</th>
            <th><hr></th>
        </tr>
        {foreach from=$items item=$item}
        <tr>
            <td>{$item->Apellido|upper}, {$item->Nombre}</td>
            <td>{$item->Titulo}</td>
            <td>{$item->Genero}</td>
            <td>{$item->Descripcion|lower|truncate:10}</td>
            <td> <a href="viewDescripcion/{$book->id_libros}">Leer mas...</a> </td>
        </tr>
        {/foreach}
</table>

{include file="templates/footer.tpl"}
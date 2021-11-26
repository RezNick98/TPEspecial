{include file="templates/header.tpl"}

<table  class="table table-dark table-hover">
        <thead>
            <th>Numero de autor</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th><hr/></th>
            <th>Eliminar</th>
        </thead>
        <tbody>
        {foreach from=$items item=$item}       
            <tr>
                <td>{$item->Id_autor|upper}</td>
                <td>{$item->Nombre|upper}</td>
                <td>{$item->Apellido}</td>
                <td> <a class="btn btn-info" href="autorLibros/{$item->Id_autor}">Leer mas...</a> </td>
                <td> <a class="btn btn-danger" href="eliminarAutor/{$item->Id_autor}">Eliminar</a> </td>
            </tr>
        {/foreach}
    </tbody>
</table>

<h2>Registre un nuevo autor</h2>

<form action="agregarAutor" method="POST">
         <label>Nombre: </label><input type="text" name="Nombre">
        <label>Apellido: </label> <input type="text" name="Apellido">
        <input class="btn btn-success" type="submit" value="Enviar">
</form>

<h2>Modifique un autor existente</h2>

<form action="updateBook" method="POST">
         <label>Nombre: </label><input type="text" name="Nombre">
        <label>Apellido: </label> <input type="text" name="Apellido">
    <select name="select">
        {foreach from=$items item=$item}    
            <option value="{$item->Id_autor}">{$item->Nombre} {$item->Apellido}</option>
        {/foreach}
    </select>
        <input class="btn btn-success" type="submit" value="Modificar">
</form>


{include file="templates/footer.tpl"}
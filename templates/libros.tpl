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
<fom action="addBook" method="POST">
    <label>Id del nuevo libro</label><input type="number" name="Id_libro">
    <label>Titulo del libro</label><input type="text" name="Titulo">
    <label>Genero del libro</label><select><option></option></select>
    <label>Descripcion del libro</label><input type="text" name"Descripcion">
    <input type="submit" name="Enviar" value="Enviar">
</fom>
<form action="addAutor" method="POST">
   <label>Id del nuevo autor</label> <input type="number" name='Id_autor'>
   <label>Nombre del autor</label> <input type="text" name='Nombre' >
    <label>Apellido del autor</label><input type="text" name='Apellido'>
    <input type="submit" name="Enviar" value="Enviar">
</form>
<form action="filterAutor" method="POST">
        <select class="form-select mt-2" aria-label="Disabled select example">
        {foreach from=$autors item=$autor key=key name=name}    
            <option>{$autor->Apellido}, {$autor->Nombre}</option>
        {/foreach}
        </select>
        <input class="btn btn-outline-secondary mt-2" type="submit" name="Filtrar" value="Filtrar">
</form>

{include file="templates/footer.tpl"}
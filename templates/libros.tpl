{include file="templates/header.tpl"}

<table class="table table-dark table-striped">
        <tr>
            <th>Titulo</th>
            <th>Genero</th>
            <th>Descripcion</th>
            <th><hr></th>
        </tr>
        {foreach from=$books item=$book}
        <tr>
            <td>{$book->Titulo|upper}</td>
            <td>{$book->Genero}</td>
            <td>{$book->Descripcion|lower|truncate:10}</td>
            <td> <a href="viewDescripcion/{$book->id_libros}">Leer mas...</a> </td>
        </tr>
        {/foreach}
</table>


<div class="container">
    <fom action="addBook" method="POST">
        <p><label>Id del nuevo libro</label> <input type="number" name="Id_libro"></p>
        <p><label>Titulo del libro</label> <input type="text" name="Titulo"></p>
        <p><label>Genero del libro</label> <select><option></option></select></p>
        <p><label>Descripcion del libro</label> <input type="text" name"Descripcion"></p>
        <p><input type="submit" name="Enviar" value="Enviar"></p>
    </fom>
    <form action="addAutor" method="POST"></p>
        <p><label>Id del nuevo autor</label> <input type="number" name='Id_autor'></p>
        <p><label>Nombre del autor</label> <input type="text" name='Nombre' ></p>
        <p><label>Apellido del autor</label> <input type="text" name='Apellido'></p>
        <p><input type="submit" name="Enviar" value="Enviar"></p>
    </form>
    <form action="filterAutor" method="POST">
        <select class="form-select mt-2" aria-label="Disabled select example">
        {foreach from=$autors item=$autor}  
            <option>{$autor->Apellido}, {$autor->Nombre}</option>
        {/foreach}
        </select>
        <input class="btn btn-outline-secondary mt-2" type="submit" name="Filtrar" value="Filtrar">
    </form>
</div>

{include file="templates/footer.tpl"}
{include file="templates/header.tpl"}

<div class="container px-5 p-5 border bg-light">

    <h1>Titulo: {$item->Titulo}</h1>

        <h3>Genero: {$item->Genero}</h3>

        <h5 class="mt-5">Descripcion:</h5>
    <div class="p-3 p-5 border bg-light">
        <p>{$item->Descripcion}</p>
    </div>

    <a href='home'  class="btn btn-primary mt-5"> Volver </a>
</div>

{include file="templates/footer.tpl"}
<?php
/* Smarty version 3.1.39, created on 2021-10-08 21:12:40
  from 'C:\xampp\htdocs\TPEspecial\templates\libros.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616098289ab3d6_58904757',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '892ea1d8b109c53563ce15bd3fbf412405148495' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEspecial\\templates\\libros.tpl',
      1 => 1633720359,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_616098289ab3d6_58904757 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<table class="table table-dark table-striped">
        <tr>
            <th>Titulo</th>
            <th>Genero</th>
            <th>Descripcion</th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['books']->value, 'book');
$_smarty_tpl->tpl_vars['book']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['book']->value) {
$_smarty_tpl->tpl_vars['book']->do_else = false;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['book']->value->Titulo;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['book']->value->Genero;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['book']->value->Descripcion;?>
</td>
        </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['autors']->value, 'autor', false, 'key', 'name', array (
));
$_smarty_tpl->tpl_vars['autor']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['autor']->value) {
$_smarty_tpl->tpl_vars['autor']->do_else = false;
?>    
            <option><?php echo $_smarty_tpl->tpl_vars['autor']->value->Apellido;?>
, <?php echo $_smarty_tpl->tpl_vars['autor']->value->Nombre;?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <input class="btn btn-outline-secondary mt-2" type="submit" name="Filtrar" value="Filtrar">
</form>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

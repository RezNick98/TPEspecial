<?php
/* Smarty version 3.1.39, created on 2021-10-11 00:55:35
  from 'C:\xampp\htdocs\Tpe 2\TPEspecial\templates\libros.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61636f67d0bfd6_34441146',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9df112d92e87e08f3998c13fb9c6abbc94de612' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpe 2\\TPEspecial\\templates\\libros.tpl',
      1 => 1633906534,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61636f67d0bfd6_34441146 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Tpe2\\TPEspecial\\libs\\smarty-3.1.39\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<nav class="nav">
    <p>Autores: 
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['autors']->value, 'autor');
$_smarty_tpl->tpl_vars['autor']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['autor']->value) {
$_smarty_tpl->tpl_vars['autor']->do_else = false;
?>    
        <a class="btn btn-secondary mt-2 mb-2" href="autorLibros/<?php echo $_smarty_tpl->tpl_vars['autor']->value->Id_autor;?>
"><?php echo $_smarty_tpl->tpl_vars['autor']->value->Nombre;?>
 <?php echo $_smarty_tpl->tpl_vars['autor']->value->Apellido;?>
</a>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </p>
    <p>Generos: 
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['books']->value, 'book');
$_smarty_tpl->tpl_vars['book']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['book']->value) {
$_smarty_tpl->tpl_vars['book']->do_else = false;
?>
        <a class="btn btn-secondary mt-2 mb-2" href="generosLibros/<?php echo $_smarty_tpl->tpl_vars['book']->value->Genero;?>
"><?php echo $_smarty_tpl->tpl_vars['book']->value->Genero;?>
</a>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['books']->value, 'book');
$_smarty_tpl->tpl_vars['book']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['book']->value) {
$_smarty_tpl->tpl_vars['book']->do_else = false;
?>       
            <tr>
                <td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['book']->value->Titulo, 'UTF-8');?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['book']->value->Genero;?>
</td>
                <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['book']->value->Descripcion,10);?>
</td>
                <td> <a class="btn btn-warning" href="viewDescripcion/<?php echo $_smarty_tpl->tpl_vars['book']->value->id_libros;?>
">Leer mas...</a> </td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>

<form action="reseña" method="post">
        <p>Nombre: <input type="text" name="nombre"></p>
        <p>Reseña: <textarea name="texto"cols="30" rows="1"></textarea></p>
    <select name="select">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['autors']->value, 'autor');
$_smarty_tpl->tpl_vars['autor']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['autor']->value) {
$_smarty_tpl->tpl_vars['autor']->do_else = false;
?>    
            <option value="<?php echo $_smarty_tpl->tpl_vars['autor']->value->Id_autor;?>
"><?php echo $_smarty_tpl->tpl_vars['autor']->value->Nombre;?>
 <?php echo $_smarty_tpl->tpl_vars['autor']->value->Apellido;?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
        <input type="submit" value="Enviar">
</form>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

<?php
/* Smarty version 3.1.39, created on 2021-10-10 18:47:17
  from 'C:\xampp\htdocs\Tpe 2\TPEspecial\templates\genero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61631915a7c1d2_65981048',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb7b93d73673c4d6dba2c927f9848bd6a04a9bbb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpe 2\\TPEspecial\\templates\\genero.tpl',
      1 => 1633884435,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_61631915a7c1d2_65981048 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Tpe2\\TPEspecial\\libs\\smarty-3.1.39\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<table class="table table-dark table-striped">
        <tr>
            <th>Libro</th>
            <th>Genero</th>
            <th>Descripcion</th>
            <th><hr></th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genero']->value, 'gen');
$_smarty_tpl->tpl_vars['gen']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gen']->value) {
$_smarty_tpl->tpl_vars['gen']->do_else = false;
?>
        <tr>
            <td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['gen']->value->Titulo, 'UTF-8');?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['gen']->value->Genero;?>
</td>
            <td><?php echo smarty_modifier_truncate(mb_strtolower($_smarty_tpl->tpl_vars['gen']->value->Descripcion, 'UTF-8'),20);?>
</td>
            <td> <a class="btn btn-warning" href="viewDescripcion/<?php echo $_smarty_tpl->tpl_vars['gen']->value->id_libros;?>
">Leer mas...</a> </td>
        </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>

<a href='home' class="btn btn-primary mt-5"> Volver al home </a>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

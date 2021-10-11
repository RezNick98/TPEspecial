<?php
/* Smarty version 3.1.39, created on 2021-10-11 20:30:33
  from 'C:\xampp\htdocs\TPEspecial\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616482c9614d86_26886254',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9b1ae8ed261f62e7eaebb4d23568f26c4c3043b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEspecial\\templates\\register.tpl',
      1 => 1633976534,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_616482c9614d86_26886254 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form class="row g-3" method="POST" action="register">
<h2> register</h2>
  <div class="col-auto">
  <label for="Email" >Ingres su email</label>
    <input type="text"  name="Email" id="Email"; required>
  </div>
  <div class="col-auto">
  <label for="Password">Ingrese su password</label>
    <input type="password" name="Password" id="Password" placeholder="Password" required>
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Crear cuenta</button>
  </div>
</form><?php }
}

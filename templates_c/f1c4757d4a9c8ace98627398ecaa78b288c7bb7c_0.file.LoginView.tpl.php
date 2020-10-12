<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-29 23:07:15
  from 'E:\szkola\Z-PHP\xamp\htdocs\MOJKALK2\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f73a2036263b7_49759824',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1c4757d4a9c8ace98627398ecaa78b288c7bb7c' => 
    array (
      0 => 'E:\\szkola\\Z-PHP\\xamp\\htdocs\\MOJKALK2\\app\\views\\LoginView.tpl',
      1 => 1601413634,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f73a2036263b7_49759824 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17133548125f73a20361e301_15872929', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_17133548125f73a20361e301_15872929 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_17133548125f73a20361e301_15872929',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div style="margin: 10px 20%">
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post"  class="pure-form pure-form-aligned bottom-margin">
	<fieldset>
			<label for="id_login">Login: </label>
			<input id="id_login" type="text" name="login"/>
			<label for="id_pass">Hasło: </label>
			<input id="id_pass" type="password" name="pass" /><br />
	</fieldset>
        <input type="submit" value="Zaloguj" class="pure-button pure-button-primary"/>
</form>	
 </div> 
<div class="messages" style="margin: 50px 20%">
<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
	<h4>Błąd </h4>
	<ol id="err">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
?>
	
		<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
	
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
<?php }?>



</div>

<?php
}
}
/* {/block 'content'} */
}

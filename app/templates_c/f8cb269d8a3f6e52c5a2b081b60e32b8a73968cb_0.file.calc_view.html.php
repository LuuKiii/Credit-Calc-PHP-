<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-29 20:19:24
  from 'E:\szkola\Z-PHP\xamp\htdocs\MOJKALK2\app\Calc\calc_view.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f737aac1b0397_26699275',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8cb269d8a3f6e52c5a2b081b60e32b8a73968cb' => 
    array (
      0 => 'E:\\szkola\\Z-PHP\\xamp\\htdocs\\MOJKALK2\\app\\Calc\\calc_view.html',
      1 => 1601403562,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f737aac1b0397_26699275 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
<!doctype html>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9303160585f737aac1a6ec1_18834243', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.html"));
}
/* {block 'content'} */
class Block_9303160585f737aac1a6ec1_18834243 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9303160585f737aac1a6ec1_18834243',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Kalkulator</title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/default.css">
</head>
<body>

<div style="margin: 50px 45%">
    
    
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calculate" method="post" class="pure-form pure-form-stacked">
	<fieldset>
		<label for="id_kwota">Kwota: </label>
                <input id="id_kwota" type="text" placeholder="Kwota" name="kwota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kwota;?>
" />

		<label for="id_proc">z oprocentowaniem </label>
                <input id="id_proc" type="text" placeholder="%" name="proc" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->proc;?>
" />                
                
		<label for="id_czas">Na czas: </label>
                <input id="id_czas" type="text" placeholder="---" name="czas" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->czas;?>
" />
                
                
                <select name="jed" id="id_jed">
		<option value="r">lat</option>
		<option value="m">miesięcy</option>
		</select>

                

	</fieldset>	
	<input type="submit" value="Policz" class="pure-button pure-button-primary" />
</form>	
    
    
    

    
    
<div class="messages">
<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
	<h4>Wystąpiły błędy: </h4>
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


<?php if (isset($_smarty_tpl->tpl_vars['res']->value->result)) {?>
	<h4>Wynik</h4>
	<p class="res">
        <label >Do spłaty : </label>
	<?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

        <label > Rata : </label>
         <?php echo $_smarty_tpl->tpl_vars['res']->value->rata;?>

	</p>
<?php }?>

</div>
<?php
}
}
/* {/block 'content'} */
}

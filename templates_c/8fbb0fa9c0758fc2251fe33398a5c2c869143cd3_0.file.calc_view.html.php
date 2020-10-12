<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-29 16:28:54
  from 'E:\szkola\Z-PHP\xamp\htdocs\MOJKALK2\app\calc_view.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7344a69197d6_54149046',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fbb0fa9c0758fc2251fe33398a5c2c869143cd3' => 
    array (
      0 => 'E:\\szkola\\Z-PHP\\xamp\\htdocs\\MOJKALK2\\app\\calc_view.html',
      1 => 1601389315,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f7344a69197d6_54149046 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
<!doctype html>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9615519785f7344a6910117_02693377', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'content'} */
class Block_9615519785f7344a6910117_02693377 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9615519785f7344a6910117_02693377',
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
    
    
<form action="/MOJKALK2/app/calc.php" method="post" class="pure-form pure-form-stacked">
	<fieldset>
		<label for="id_kwota">Kwota: </label>
		<input id="id_kwota" type="text" placeholder="Kwota" name="kwota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['kwota'];?>
" />

		<label for="id_proc">z oprocentowaniem </label>
		<input id="id_proc" type="text" placeholder="%" name="proc" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['proc'];?>
" />                
                
		<label for="id_czas">Na czas: </label>
                <input id="id_czas" type="text" placeholder="---" name="czas" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['czas'];?>
" />
                
                
                <select name="jed" id="id_jed">
		<option value="r">lat</option>
		<option value="m">miesięcy</option>
		</select>

                

	</fieldset>	
	<input type="submit" value="Calculate" class="pure-button pure-button-primary" />
</form>	
    
    
    

    
    
<div class="messages">
<?php if (isset($_smarty_tpl->tpl_vars['messages']->value)) {?>
	<?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
		<h4>Błąd</h4>
		<ol id="err">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>

<?php if (isset($_smarty_tpl->tpl_vars['result']->value)) {?>
	<h4>Wynik</h4>
	<p id="res">
        <label >Do spłaty : </label>
	<?php echo $_smarty_tpl->tpl_vars['result']->value;?>

        <label > Rata : </label>
         <?php echo $_smarty_tpl->tpl_vars['rata']->value;?>

	</p>
<?php }?>

</div>
<?php
}
}
/* {/block 'content'} */
}

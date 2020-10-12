<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-29 23:21:32
  from 'E:\szkola\Z-PHP\xamp\htdocs\MOJKALK2\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f73a55c975523_62148999',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c662d795381d801325e8688c9ca6a9ef27714c37' => 
    array (
      0 => 'E:\\szkola\\Z-PHP\\xamp\\htdocs\\MOJKALK2\\app\\views\\templates\\main.tpl',
      1 => 1601414392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f73a55c975523_62148999 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Quicksand:400,700|Questrial" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/default.css">	
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
    <link href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/fonts/fonts.css" rel="stylesheet" type="text/css" media="all" >
    
<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
    
<div id="header-wrapper">
	<div id="header" class="container">


		<div id="menu">
			<ul>
                               <li ><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
Ad" title="">Reklama</a></li>
				<li ><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
" title="">Kalkulator</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout"  class="pure-menu-heading pure-menu-link">wyloguj</a></li>
			</ul>
		</div>
	</div>
</div>
    
<div class="wrapper">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8012205855f73a55c974f21_78657270', 'content');
?>

</div><!-- content -->

	<div id="copyright">
	<p>&copy; Kalkulator | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
</body>
</html><?php }
/* {block 'content'} */
class Block_8012205855f73a55c974f21_78657270 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8012205855f73a55c974f21_78657270',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  <?php
}
}
/* {/block 'content'} */
}

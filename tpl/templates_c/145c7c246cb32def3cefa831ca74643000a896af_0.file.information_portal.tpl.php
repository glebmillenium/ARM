<?php
/* Smarty version 3.1.30, created on 2017-09-18 07:18:29
  from "C:\xampp\htdocs\ARM\tpl\templates\information_portal\information_portal.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59bf5725e71e22_57032875',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '145c7c246cb32def3cefa831ca74643000a896af' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ARM\\tpl\\templates\\information_portal\\information_portal.tpl',
      1 => 1505711908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59bf5725e71e22_57032875 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE  HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html>
<head>
<meta charset="utf-8">
<title>Информационный портал ЕЭИСЦ</title>
	<?php if (isset($_smarty_tpl->tpl_vars['css']->value)) {?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['css']->value, 'foo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->value) {
?>
			<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
">
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	<?php }?>

	<?php if (isset($_smarty_tpl->tpl_vars['js']->value)) {?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['js']->value, 'foo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->value) {
?>
			<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
"><?php echo '</script'; ?>
>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	<?php }?>
</head>
<body>
	<p align = "center">Информационный портал ЕЭИСЦ</p>
	<div class="left_block"><p>dasdasdd</p></div>
	<div class="right_block"><p>23132423</p></div>
</body>
</html>
<?php }
}

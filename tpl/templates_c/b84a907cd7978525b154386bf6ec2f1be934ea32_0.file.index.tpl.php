<?php
/* Smarty version 3.1.30, created on 2017-09-18 03:56:12
  from "C:\xampp\htdocs\ARM\tpl\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59bf27bce7d6d0_74709968',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b84a907cd7978525b154386bf6ec2f1be934ea32' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ARM\\tpl\\templates\\index.tpl',
      1 => 1505699772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59bf27bce7d6d0_74709968 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Информационный портал ЕЭИСЦ</title>
		<link rel="stylesheet" href='C:\xampp\htdocs\ARM\css\reset.css'>
		<link rel="stylesheet" href='C:\xampp\htdocs\ARM\css\animate.css'>
		<link rel="stylesheet" href='C:\xampp\htdocs\ARM\css\styles.css'>
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

		<?php echo '</script'; ?>
>
	<body>


		<div class="vladmaxi-top">
			<a>Вход в информационный портал ЕЭИСЦ</a>
			</span>
		<div class="clr"></div>
		</div>

		<div id="container">
			<form>
				<label for="name">Логин:</label>
				<input type="name">
				<label for="username">Пароль:</label>
				<input type="password"><br>
						<p><a href="#">Забыли пароль?</a></p>
				<div id="lower">
					<input type="checkbox"><label class="check" for="checkbox">Запомнить меня</label>
					<input type="button" value="Войти" onclick="checkLoginAndPassword();" >
				</div>
			</form>
		</div>
	</body>
</html>
	
	
	
	
	
		
	<?php }
}

<?php
	/*********************** подключаем библиотеку smarty ***********************/

	define('SMARTY_DIR','smarty/');
	require(SMARTY_DIR.'Smarty.class.php');

	$smarty = new Smarty ();

	$smarty->template_dir='tpl/templates/';//указываем путь к шаблонам
	$smarty->compile_dir='tpl/templates_c/';
	$smarty->config_dir='tpl/configs/';
	$smarty->cache_dir='tpl/cache/';
	
	//-------------------------------------------------------
	$arr_meta_tags['title'] = "Мой личный хостинговый сайт";
	$smarty->assign('title',$arr_meta_tags['title']);
	//-------------------------------------------------------
	
	$smarty->display("index.tpl");
?>
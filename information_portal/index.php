<?php
	require_once("../smarty_connect.php");
	$smarty = getSmarty(array('reset', 'animate', 'styles'), array('process'));
	//$arr_meta_tags['title'] = "Мой личный хостинговый сайт";
	//$smarty->assign('title',$arr_meta_tags['title']);

	$smarty->display("information_portal.tpl");
?>
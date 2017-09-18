<?php
	require_once("../smarty_connect.php");
	$smarty = getSmarty(array('panel'));
	$smarty->display("information_portal/information_portal.tpl");
	$smarty->display("information_portal/display_scheme.tpl");
?>
<?php
	require_once("../smarty_connect.php");
	require_once("../php/working_with_directories.php");
	$smarty = getSmarty(array('panel'));
	
	$ar = new WorkingWithDirectories();
	$ar->getArrayFiles("C:\project");
	print_r($ar);
?>
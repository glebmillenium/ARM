<?php
    require_once("../smarty_connect.php");
    require_once("../php/working_with_directories.php");
    $smarty = getSmarty(array('panel'));

    $ierarchicalTreeFromCatalog = 
            WorkingWithDirectories::getArrayFiles("C:\project\\");
    $smarty->assign('ierarchicalTreeFromCatalog', $ierarchicalTreeFromCatalog);
    
//print_r($ar);
?>
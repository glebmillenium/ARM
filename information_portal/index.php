<?php
    require_once("../smarty_connect.php");
    require_once("../php/working_with_directories.php");
    $smarty = getSmarty(
            array(

                'information_portal_grid',

                'information_portal_special_divs'),
            array('tree_toggle')
            );

    $ierarchicalTreeFromCatalog = 
            WorkingWithDirectories::getArrayFiles("C:\project\\");
    $smarty->assign('ierarchicalTreeFromCatalog', $ierarchicalTreeFromCatalog);
    $smarty->display("information_portal/information_portal.tpl");
//print_r($ar);
?>
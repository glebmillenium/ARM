<?php
    require_once("smarty_connect.php");
    $smarty = getSmarty(array('reset', 'animate', 'styles'), array('process'));
    $smarty->display("index.tpl");
?>
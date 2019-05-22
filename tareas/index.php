<?php
    require_once 'database.php';
    require('libs/Smarty.class.php');
    $tareas = getTareas();
    $smarty = new Smarty();
    $smarty->assign('tareas',$tareas);
    $smarty->display('templates/index.tpl');
?>

<?php
require_once "database.php";
require('libs/Smarty.class.php');


$id_tarea = $_GET["id"];
$tarea = getTarea($id_tarea);

$smarty = new Smarty();
$smarty->assign('tarea',$tarea);
$smarty->display('templates/tarea.tpl');
?>

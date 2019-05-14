<?php   
require_once "database.php";
$id_tarea = $_GET["id"];

borrarTarea($id_tarea);
header("Location: index.php");

?>
<?php
require_once "database.php";
$id_tarea = $_GET["id"];

actualizarTarea($id_tarea);
header("Location: index.php");
?>
<?php
require_once "database.php";


$id_tarea = $_GET["id"];
$tarea = getTarea($id_tarea);

echo "<h1>".$tarea["titulo"]."</h1>";
echo "<h3>".$tarea["descripcion"]."</h3>";

?>
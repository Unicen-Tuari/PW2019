<?php
require_once "database.php";

$data_finalizada = 0;

if(isset($_POST["finalizada"])){
    $data_finalizada = 1;
}

crearTarea($_POST["nombre"],$_POST["descripcion"],$data_finalizada);
// Redirect browser
header("Location: index.php");

?>
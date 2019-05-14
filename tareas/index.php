<?php
    require_once 'database.php';

?>

<h1>Lista de Tareas</h1>

<ul>

    <?php
        $tareas = getTareas();

        foreach($tareas as $tarea)
        {
            if($tarea['finalizada'] == "1"){
                echo "<li> <h3> Titulo: <a href='verTarea.php?id=".$tarea['id']."'>".$tarea['titulo'].'</a> </h3> - Descripcion:'.$tarea['descripcion'].' - Finalizada:'.$tarea['finalizada']." -  
                <a href='borrarTarea.php?id=".$tarea['id']."'> Borrar </a> - 
                <a href='actualizarTarea.php?id=".$tarea['id']."'> Finalizar </a>
                </li>";
            }else{
                echo "<li> <strike> <h3> Titulo: <a href='verTarea.php?id=".$tarea['id']."'>".$tarea['titulo'].'</a> </h3> - Descripcion:'.$tarea['descripcion'].' - Finalizada:'.$tarea['finalizada']." </strike> -  
                <a href='borrarTarea.php?id=".$tarea['id']."'> Borrar </a> 
                </li>";
            }
        }
    ?> 
 </ul>


<form action="crearTarea.php" method="post">
    <input type="text" name="nombre" id="nombre">
    <input type="text" name="descripcion" id="descripcion">
    <input type="checkbox" name="finalizada" id="finalizada">
    <input type="submit" value="Crear">
</form>
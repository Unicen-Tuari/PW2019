<?php
    require_once 'database.php';
    require('libs/Smarty.class.php');

    function tareas(){
      $tareas = getTareas();
      $smarty = new Smarty();
      $base_url = 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/';
      $smarty->assign('base_url',$base_url);
      $smarty->assign('tareas',$tareas);
      return $smarty->display('templates/index.tpl');
    }

    function finalizar($params){
      actualizarTarea($params[0]);
      header("Location: ../tareas");
    }

    function borrar($params){
      borrarTarea($params[0]);
      header("Location: ../tareas");
    }

    function ver($params){
      $tarea = getTarea($params[0]);
      $smarty = new Smarty();
      $base_url = 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/';
      $smarty->assign('base_url',$base_url);
      $smarty->assign('tarea',$tarea);
      return $smarty->display('templates/tarea.tpl');
    }

    function crear(){
      $data_finalizada = 0;

      if(isset($_POST["finalizada"])){
          $data_finalizada = 1;
      }

      crearTarea($_POST["tarea"],$_POST["descripcion"],$data_finalizada);
      // Redirect browser
      header("Location: ../tareas");
    }
?>

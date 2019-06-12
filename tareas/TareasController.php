<?php
require_once('TareasView.php');
require_once('TareasModel.php');

class TareasController
{

  private $model;
  private $view;

  function __construct()
  {
    $this->model = new TareasModel();
    $this->view = new TareasView();
    session_start();
    if (!isset($_SESSION['email'])){
      header("Location: login");
      die();
    }
    if ( isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 5)) {
        header("Location: ../logout");
        die();
    }

    $_SESSION['LAST_ACTIVITY'] = time();
    echo $_SESSION['LAST_ACTIVITY'];
  }

  function tareas($error=null){

      $tareas = $this->model->getTareas();
      return $this->view->tareas($tareas, $error);

  }

  function finalizar($params){
    $this->model->finalizarTarea($params[0]);
    header("Location: ../tareas");
  }

  function borrar($params){
    $this->model->borrarTarea($params[0]);
    header("Location: ../tareas");
  }

  function ver($params){
    $tarea = $this->model->getTarea($params[0]);
    return $this->view->ver($tarea);
  }

  function crear(){
    $data_finalizada = 0;
    if(isset($_POST["finalizada"])){
        $data_finalizada = 1;
    }
    if($_POST["descripcion"]==""){
      $this->tareas("La tarea debe tener descruipcion.");
      return;
    }

    if(!$this->contienePalabraProhibida($_POST["tarea"])){
      $this->model->crearTarea($_POST["tarea"],$_POST["descripcion"],$data_finalizada);
      header("Location: ../tareas");
    }
    else {
      $this->tareas("Tarea no creada, contenia palabras prohibidas.");
    }

  }

  function editar($params){
    $tarea = $this->model->getTarea($params[0]);
    return $this->view->editar($tarea);
    }

    function actualizar(){
      $this->model->actualizarTarea($_POST["idTarea"],$_POST["tarea"],$_POST["descripcion"]);
      header("Location: ../tareas");
    }

  function contienePalabraProhibida($texto){
    $prohibida="gustaria";
    $pos=strpos($texto, $prohibida);
    return $pos !== false;
  }
}

 ?>

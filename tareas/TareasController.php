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
  }

  function tareas(){
    $tareas = $this->model->getTareas();
    return $this->view->tareas($tareas);
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

    $this->model->crearTarea($_POST["tarea"],$_POST["descripcion"],$data_finalizada);
    header("Location: ../tareas");
  }

  function editar($params){
    $tarea = $this->model->getTarea($params[0]);
    return $this->view->editar($tarea);
    }

    function actualizar(){
      $this->model->actualizarTarea($_POST["idTarea"],$_POST["tarea"],$_POST["descripcion"]);
      header("Location: ../tareas");
    }
}

 ?>

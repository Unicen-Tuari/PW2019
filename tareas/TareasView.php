<?php
require_once('libs/Smarty.class.php');
class TareasView
{
  private $smarty;
  private $base_url;

  function __construct()
  {
    $this->smarty = new Smarty();
    $this->base_url = 'http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/';
  }

  function tareas($tareas, $error){
    $this->smarty->assign('base_url',$this->base_url);
    $this->smarty->assign('tareas',$tareas);
    $this->smarty->assign('error',$error);
    return $this->smarty->display('templates/index.tpl');
  }

  function ver($tarea){
    $this->smarty->assign('base_url',$this->base_url);
    $this->smarty->assign('tarea',$tarea);
    return $this->smarty->display('templates/tarea.tpl');
  }

  function editar($tarea){
    $this->smarty->assign('base_url',$this->base_url);
    $this->smarty->assign('tarea',$tarea);
    return $this->smarty->display('templates/edit.tpl');
  }
}

 ?>

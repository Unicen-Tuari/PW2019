<?php

class TareasModel
{
  private $db;

  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;'.'dbname=test1;charset=utf8', 'root', '');
  }

  function getTareas(){
      $sentencia = $this->db->prepare( "select * from tarea");
      $sentencia->execute();
      return $sentencia->fetchAll();
  }

  function getTarea($id){
      $sentencia = $this->db->prepare("SELECT * FROM `tarea` WHERE `id` = ?");
      $sentencia->execute(array($id));
      return $sentencia->fetch();
  }

  function crearTarea($titulo, $descripcion, $finalizada){
      $sentencia = $this->db->prepare( "INSERT INTO `tarea` (`titulo`, `descripcion`, `finalizada`) VALUES (?,?,?)");
      $sentencia->execute(array($titulo, $descripcion, $finalizada));
  }

  function borrarTarea($id){
      $sentencia = $this->db->prepare("DELETE FROM `tarea` WHERE `tarea`.`id` = ?");
      $sentencia->execute(array($id));
  }

  function finalizarTarea($id){
      $sentencia = $this->db->prepare("UPDATE `tarea` SET `finalizada` = '1' WHERE `tarea`.`id` = ?");
      $sentencia->execute(array($id));
  }

  function actualizarTarea($id,$titulo, $descripcion){
      $sentencia = $this->db->prepare("UPDATE `tarea` SET `titulo` = ?, `descripcion` = ? WHERE `tarea`.`id` = ?");
      $sentencia->execute(array($titulo, $descripcion, $id));
  }



}

 ?>

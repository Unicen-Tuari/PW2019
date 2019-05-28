<?php

function conectar(){
    $db = new PDO('mysql:host=localhost;'.'dbname=test1;charset=utf8', 'root', '');
    return $db;
}

function getTareas(){
    $db = conectar();
    $sentencia = $db->prepare( "select * from tarea");
    $sentencia->execute();
    return $sentencia->fetchAll();
}

function getTarea($id){
    $db = conectar();
    $sentencia = $db->prepare("SELECT * FROM `tarea` WHERE `id` = ?");
    $sentencia->execute(array($id));
    return $sentencia->fetch();
}

function crearTarea($titulo, $descripcion, $finalizada){
    $db = conectar();
    $sentencia = $db->prepare( "INSERT INTO `tarea` (`titulo`, `descripcion`, `finalizada`) VALUES (?,?,?)");
    $sentencia->execute(array($titulo, $descripcion, $finalizada));
}

function borrarTarea($id){
    $db = conectar();
    $sentencia = $db->prepare("DELETE FROM `tarea` WHERE `tarea`.`id` = ?");
    $sentencia->execute(array($id));
}

function actualizarTarea($id){
    $db = conectar();
    $sentencia = $db->prepare("UPDATE `tarea` SET `finalizada` = '1' WHERE `tarea`.`id` = ?");
    $sentencia->execute(array($id));
}

?>

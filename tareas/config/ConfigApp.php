<?php

class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      ''=> 'TareasController#tareas',
      'tareas' => 'TareasController#tareas',
      'borrar'=> 'TareasController#borrar',
      'crear'=> 'TareasController#crear',
      'finalizar' => 'TareasController#finalizar',
      'ver' => 'TareasController#ver',
      'editar' => 'TareasController#editar',
      'actualizar' => 'TareasController#actualizar',
      'login' => 'UsuariosController#login',
      'registrarse' => 'UsuariosController#registrarse',
      'registro' => 'UsuariosController#registro',
      'ingresar' => 'UsuariosController#ingresar',
      'logout' => 'UsuariosController#logout'
    ];

}

 ?>

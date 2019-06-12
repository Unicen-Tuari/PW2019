<?php
  include_once 'config/ConfigApp.php';
  include_once 'index.php';
  include_once 'TareasController.php';
  include_once 'UsuariosController.php';

function parseURL($url)
{
  $urlExploded = explode('/', $url); //['tareas']
  $arrayReturn[ConfigApp::$ACTION] = $urlExploded[0];
  $arrayReturn[ConfigApp::$PARAMS] = isset($urlExploded[1]) ? array_slice($urlExploded,1) : null;
  return $arrayReturn;
}
// [
//   "action" => "tareas",
//   "params" => null
// ]
if(isset($_GET['action'])){ //tareas/
    $urlData = parseURL($_GET['action']);
    $action = $urlData[ConfigApp::$ACTION];
    if(array_key_exists($action,ConfigApp::$ACTIONS)){
        $params = $urlData[ConfigApp::$PARAMS];
        $controllerMetodo = explode('#', ConfigApp::$ACTIONS[$action]);//TareasController#tareas
        $controller = new $controllerMetodo[0];//TareasController
        $metodo = $controllerMetodo[1];//tareas
        if(isset($params) &&  $params != null){
            echo $controller->$metodo($params);
        }
        else{
            echo $controller->$metodo(); // new TareasController()->tareas()
        }
    }
  }
?>

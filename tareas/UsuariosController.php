<?php
require_once('UsuariosView.php');
require_once('UsuariosModel.php');

class UsuariosController
{

  private $model;
  private $view;

  function __construct()
  {
    $this->model = new UsuariosModel();
    $this->view = new UsuariosView();
  }

  function login(){
    return $this->view->login();
  }

  function registrarse(){
    return $this->view->registrarse();
  }

  function registro(){

    if($_POST["email"]==""){
      //mostrar error
      return;
    }
    if($_POST["password"]==""){
      //mostrar error
      return;
    }
    $this->model->crearUsuario($_POST["email"],$_POST["password"]);
    header("Location: login");
  }

  function ingresar(){
    $email = $_POST["email"];
    $password = $_POST["password"];
    $usuario = $this->model->getUsuario($email);
    if(password_verify($password, $usuario["password"])){
      session_start();
      $_SESSION['email']=$email;
      $_SESSION['LAST_ACTIVITY'] = time();
      header("Location: tareas");
    }
    else{
      header("Location: login");
    }
  }

  function logout(){
    session_start();
    session_destroy();
    header("Location: tareas");
  }
}

 ?>

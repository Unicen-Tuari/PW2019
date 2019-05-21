<?php

  function sumarJavi($valor1, $valor2)
  {
    $resultado = $valor1 + $valor2;
    return "La suma de ".$valor1."+".$valor2." fue $resultado";
  }

  function sumar($sumandos)
  {
    $resultado = array_sum($sumandos);
    return "La suma de ".implode("+", $sumandos)." fue $resultado";
  }

  function restar($restandos)
  {
    $resultado = array_sum($restandos);
    return "La resta de ".implode("-", $restandos)." fue $resultado";
  }

  function multiplicar($multiplicandos){
    $resultado = 1;
    foreach($multiplicandos as $valor){
      $resultado = $resultado * $valor;
    }

    return "La multiplicacion es ".$resultado;


  }
 ?>

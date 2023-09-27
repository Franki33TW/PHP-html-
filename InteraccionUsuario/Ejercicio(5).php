<?php

$letra = $_POST['letra'];

switch($letra){

  case "a":
    echo "7";
    break;
  
  case "b":
    echo "9";
    break;

  case "c":
    echo "101";
    break;

  default:
    echo "La letra seleccionada es incorrecta";
    break;

}

?>
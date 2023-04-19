<?php

function maximo(){

$n1 = (int)$_POST['n1'];
$n2 = (int)$_POST['n2'];
$n3 = (int)$_POST['n3'];
$max = (int)$_POST['max'];
$maximo = 0;

if($n1 > $n2 && $n1 > $n3){

  $maximo = $n1;

}elseif($n2 > $n1 && $n2 > $n3){

  $maximo = $n2;

}elseif($n3 > $n1 && $n3 > $n2){

  $maximo = $n3;

}else{

  echo "No has puesto bien los números";
  exit;

}

if($max == $maximo){

  echo "El máximo seleccionado es correcto";

}else{

  echo "El máximo seleccionado no es correcto";

}

}

maximo();

?>
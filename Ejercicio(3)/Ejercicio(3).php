<?php

$n1 = (int)$_POST['n1'];
$n2 = (int)$_POST['n2'];
$resultado1 = $n1 + $n2;
$resultado2 = $n1 - $n2;
$operacion = $_POST['operacion'];

if($operacion == "+"){

  echo "La suma de $n1 y $n2 es: $resultado1";

}elseif($operacion == '-'){

  echo "La resta de $n1 y $n2 es: $resultado2";

}

?>
<?php

function suma(){

$n1 = (int)$_POST['n1'];
$n2 = (int)$_POST['n2'];
$resultado = $n1 + $n2;

    echo "La suma de $n1 + $n2 es: $resultado";

}

suma();

?>
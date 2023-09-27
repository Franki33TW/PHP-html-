<?php

$numero1 = (int)$_POST["n1"];
$numero2 = (int)$_POST["n2"];
$resultado = $numero1 + $numero2;


function suma($n1, $n2, $res){

    echo "La suma de $n1 + $n2 es: $res";

}

suma($numero1,$numero2,$resultado);

?>
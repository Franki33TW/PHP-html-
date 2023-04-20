<?php

$numero1 = floatval($_POST["n1"]);
$numero2 = floatval($_POST["n2"]);

function operaciones($n1, $n2){

$suma = $n1 + $n2;
$resta = $n1 - $n2;
$multiplicacion = $n1 * $n2;
$division = $n1 / $n2;

echo "La suma de $n1 + $n2 es: $suma <br>";
echo "La resta de $n1 - $n2 es: $resta <br>";
echo "La multiplicación de $n1 * $n2 es: $multiplicacion <br>";
echo "La división de $n1 / $n2 es: $division <br>";

}

operaciones($numero1, $numero2);

?>
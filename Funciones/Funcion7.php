<?php

$numero1 = floatval($_POST["n1"]);
$numero2 = floatval($_POST["n2"]);

function operaciones($n1, $n2, & $suma, & $resta, & $multiplicacion, & $division){

$suma = $n1 + $n2;
$resta = $n1 - $n2;
$multiplicacion = $n1 * $n2;
$division = $n1 / $n2;
}

operaciones($numero1, $numero2, $sum, $rest, $mult, $div);
echo "La suma es $sum <br>";
echo "La resta es $rest <br>";
echo "La multiplicación es $mult <br>";
echo "La división es $div";

?>
<?php

$frase = "Me encanta el Real Murcia";
$letra1 = "a";
$letra2 = "A";
$contador = 0;

for($i = 0; $i < strlen($frase); $i++){

  if($frase[$i] == $letra1 || $frase[$i] == $letra2){

      $contador++;

  }
}

echo "La frase ''$frase'' tiene $contador letras 'A'";

?>
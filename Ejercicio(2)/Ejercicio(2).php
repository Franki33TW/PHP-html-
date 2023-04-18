<?php

$frase = $_POST['frase'];
$letra = $_POST['letra'];
$contador = 0;

for($i = 0; $i < strlen($frase); $i++){

  if($frase[$i] == $letra){

      $contador++;

  }
}

echo "La frase ''$frase'' tiene $contador letras '$letra'";

?>
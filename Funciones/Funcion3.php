<?php

$numero1 = (int)$_POST['n1'];
$numero2 = (int)$_POST['n2'];
$numero3 = (int)$_POST['n3'];
$maximo = (int)$_POST['max'];


function maximo($n1, $n2, $n3, $max){

if($n1 > $n2 && $n1 > $n3){

  if($max == $n1){

    echo "El máximo es correcto";

  }else{

    echo "El máximo es incorrecto";

  }

}elseif($n2 > $n1 && $n2 > $n3){

  if($max == $n2){

    echo "El máximo es correcto";

  }else{

    echo "El máximo es incorrecto";

  }

}elseif($n3 > $n1 && $n3 > $n2){

  if($max == $n3){

    echo "El máximo es correcto";

  }else{

    echo "El máximo es incorrecto";

  }

}else{

  echo "No has puesto bien los números";

}

}

maximo($numero1, $numero2, $numero3, $maximo);

?>
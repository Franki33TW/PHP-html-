<?php

$numero1 = (int)$_POST['n1'];
$numero2 = (int)$_POST['n2'];
$numero3 = (int)$_POST['n3'];

function menor($n1, $n2, $n3){

if($n1 < $n2 && $n1 < $n3){

    echo "El menor es $n1";
  
}elseif($n2 < $n1 && $n2 < $n3){
  
    echo "El menor es $n2";
  
 }elseif($n3 < $n1 && $n3 < $n2){
  
    echo "El menor es $n3";
  
 }else{

    echo "Te has equivocado al introducir los números";

 }

}

menor($numero1, $numero2, $numero3);

?>
<?php

function menor(){

$n1 = (int)$_POST['n1'];
$n2 = (int)$_POST['n2'];
$n3 = (int)$_POST['n3'];

if($n1 < $n2 && $n1 < $n3){

    echo "El menor es $n1";
  
}elseif($n2 < $n1 && $n2 < $n3){
  
    echo "El menor es $n2";
  
 }else{
  
    echo "El menor es $n3";
  
 }

}

menor();

?>
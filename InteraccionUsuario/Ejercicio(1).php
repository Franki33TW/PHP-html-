<?php
$n1 = (int)$_POST['numero1'];
$n2 = (int)$_POST['numero2'];
$n3 = (int)$_POST['numero3'];

if($n1 < $n2 && $n1 < $n3){

  echo "El menor es $n1";

}elseif($n2 < $n1 && $n2 < $n3){

  echo "El menor es $n2";

}else{

  echo "El menor es $n3";

}
?>
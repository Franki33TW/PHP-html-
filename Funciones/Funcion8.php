<?php

$numero1 = $_POST["n1"];
$numero2 = $_POST["n2"];
$numero3 = $_POST["n3"];
$numero4 = $_POST["n4"];

function operaciones($n1, $n2, $n3, $n4, & $menor, & $mayor, & $media){

//El menor
$menor = $n1;
if($n2<$n1){
    $menor = $n2;
}if($n3<$n2){
    $menor = $n3;
}if($n4<$n3){
    $menor = $n4;
}

//El mayor
$mayor = $n1;
if($n2>$n1){
    $mayor = $n2;
}if($n3>$n2){
    $mayor = $n3;
}if($n4>$n3){
    $mayor = $n4;
}

//La media
$media = ($n1 + $n2 + $n3 + $n4)/4;

}

operaciones($numero1, $numero2, $numero3, $numero4, $men, $may, $med);
echo "El menor es $men <br>";
echo "El mayor es $may <br>";
echo "La media es $med <br>";

?>
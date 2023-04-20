<?php

$numero1 = $_POST["n1"];
$numero2 = $_POST["n2"];
$numero3 = $_POST["n3"];
$numero4 = $_POST["n4"];

function operaciones($n1, $n2, $n3, $n4){

//El menor
$menor = $n1;
if($n2<$n1){
    $menor = $n2;
}if($n3<$n2){
    $menor = $n3;
}if($n4<$n3){
    $menor = $n4;
}
echo "El menor es $menor <br><br>";

//El mayor
$mayor = $n1;
if($n2>$n1){
    $mayor = $n2;
}if($n3>$n2){
    $mayor = $n3;
}if($n4>$n3){
    $mayor = $n4;
}
echo "El mayor es $mayor <br><br>";

//La media
$media = ($n1 + $n2 + $n3 + $n4)/4;
echo "La media es $media";

}

operaciones($numero1, $numero2, $numero3, $numero4);

?>
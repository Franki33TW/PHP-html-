<?php

$array1 = [$_POST["n1"], $_POST["n2"], $_POST["n3"]];
$array2 = [$_POST["n4"], $_POST["n5"], $_POST["n6"]];

function sumaArray($a1, $a2){

    return array_sum($a1) + array_sum($a2);

}

echo sumaArray($array1, $array2);

?>
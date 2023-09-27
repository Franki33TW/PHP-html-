<?php

echo "Funcion con referencia <br>";
function ejemplo(& $a){
    $a =7;
}

$a = 9;
echo "$a<br>";
ejemplo($a);
echo "$a<br>";

echo "<br><br><br>";

echo "Funcion sin referencia <br>";
function ejemplo2($a){
    $a =7;
}

$a = 9;
echo "$a<br>";
ejemplo2($a);
echo "$a<br>";

?>
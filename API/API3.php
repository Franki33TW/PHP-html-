<?php

$numPerros = $_POST["perros"];

$url = 'https://dog.ceo/api/breeds/image/random';
$json = file_get_contents($url,false);
$jsonphp = json_decode($json);

for($i=0; $i<$numPerros; $i++){
    echo '<ul><li><img src="'.$jsonphp->{"message"}.'"></li></ul>';
}

?>
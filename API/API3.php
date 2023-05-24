<?php

$numPerros = $_POST["perros"];

$url = 'https://dog.ceo/api/breeds/image/random';

echo "<ul>";
for($i=0; $i<$numPerros; $i++){
    $json = file_get_contents($url,false);
    $jsonphp = json_decode($json);
    echo '<li><img src="'.$jsonphp->{"message"}.'"></li>';
}
echo "</ul>";
?>
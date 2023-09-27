<?php

$url = 'https://dog.ceo/api/breeds/image/random';
$json = file_get_contents($url,false);
$jsonphp = json_decode($json);
echo '<img src="'.$jsonphp->{"message"}.'">';

?>
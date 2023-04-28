<?php
   $url = 'https://pokeapi.co/api/v2/pokemon/ditto';
    $json = file_get_contents($url,false);
    $jsonphp = json_decode($json);
    var_dump($jsonphp);
?>
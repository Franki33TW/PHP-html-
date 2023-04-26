<?php

$json = '{
    "localidade 1": {
    "Continente": "África",
    "País": "Angola",
    "Capital": "Luanda"
    },
    "localidade 2": {
    "Continente": "América do Norte",
    "País": "Estados Unidos",
    "Capital": "Washington DC"
    },
    "localidade 3": {
    "Continente": "América Central",
    "País": "México",
    "Capital": "Cidade do México"
    },
    "localidade 4": {
    "Continente": "América do Sul",
    "País": "Brasil",
    "Capital": "Brasília"
    },
    "localidade 5": {
    "Continente": "Europa",
    "País": "Espanha",
    "Capital": "Madri"
    },
    "localidade 6": {
    "Continente": "Europa",
    "País": "Alemanha",
    "Capital": "Berlim"
    },
    "localidade 7": {
    "Continente": "Oceania",
    "País": "Austrália",
    "Capital": "Camberra"
    },
    "localidade 8": {
    "Continente": "Ásia",
    "País": "Japão",
    "Capital": "Tóquio"
    }
}';
   


$jsonphp = json_decode($json);
echo $jsonphp->{"localidade 8"}->{"País"}."<br>";
$localidade9 = '{
    "Continente": "Europa",
    "País": "España",
    "Capital": "Murcia"
    }';
$jsonphp->{"localidade 9"} = json_decode($localidade9);

$jsonphp->{"localidade 4"}->{"N habitantes"} = 6590;

var_dump($jsonphp);

?>
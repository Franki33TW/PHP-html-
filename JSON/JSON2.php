<?php

$a = 
[
    "localidade 1"=> [
    "Continente"=> "África",
    "País"=> "Angola",
    "Capital"=> "Luanda"
    ],
    "localidade 2"=> [
    "Continente"=> "América do Norte",
    "País"=> "Estados Unidos",
    "Capital"=> "Washington DC"
    ],
    "localidade 3"=> [
    "Continente"=> "América Central",
    "País"=> "México",
    "Capital"=> "Cidade do México"
    ],
    "localidade 4"=> [
    "Continente"=> "América do Sul",
    "País"=> "Brasil",
    "Capital"=> "Brasília",
    "Numero de habitantes"=> "1.000.000 de habitantes"
    ],
    "localidade 5"=> [
    "Continente"=> "Europa",
    "País"=> "Espanha",
    "Capital"=> "Madri"
    ],
    "localidade 6"=> [
    "Continente"=> "Europa",
    "País"=> "Alemanha",
    "Capital"=> "Berlim"
    ],
    "localidade 7"=> [
    "Continente"=> "Oceania",
    "País"=> "Austrália",
    "Capital"=> "Camberra"
    ],
    "localidade 8"=> [
    "Continente"=> "Ásia",
    "País"=> "Japão",
    "Capital"=> "Tóquio"
    ],
    "localidad de Franki"=> [
    "Continente"=> "Europa",
    "Pais"=> "Spain",
    "Ciudad"=> "Murcia"
    ]
];

echo $a["localidade 8"]["País"]."<br><br>";

echo json_encode($a["localidad de Franki"])."<br><br>";

echo $a["localidade 4"]["Numero de habitantes"]."<br><br>";

$a = 
[
"localidade 1"=>"Luanda",
"localidade 2"=>"Washington DC",
"localidade 3"=>"Cidade do México",
"localidade 4"=>"Brasília",
"localidade 5"=>"Madri",
"localidade 6"=>"Berlim",
"localidade 7"=>"Camberra",
"localidade 8"=>"Tóquio"
];

echo $a["localidade 8"];

?>
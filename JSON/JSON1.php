<?php

$jsonPHP = [
    "personas"=>
    [
        [
            "nombre" => "Luis",
            "email" => "a@a.com",
            "edad" => 45
        ],
        [
            "nombre" => "María",
            "email" => "b@b.com",
            "edad" => 23
        ],
        [
            "nombre" => "Juan",
            "email" => "c@c.com",
            "edad" => 32
        ]
    ]
];

echo $jsonPHP["personas"][2]["email"];
echo "<br>";
echo $jsonPHP["personas"][0]["edad"]."<br>";
$jsonPHP["animales"]="perro";
var_dump($jsonPHP);
?>
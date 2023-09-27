<?php

$jsonphp = [
    "Gofres Belgas"=>
    [
        "Precio" => 5.95,
        "Descripcion" => "Dos de nuestros famosos gofres belgas con abundante sirope",
        "Calorias" => 650,
    ],
    "Gofres Belgas con Fresas"=>
    [
        "Precio" => 7.95,
        "Descripcion" => "Ligeros gofres belgas cubiertos de fresa y nata montada",
        "Calorias" => 900,
    ],
    "Gofres Belgas con Frutos del Bosque"=>
    [
        "Precio" => 8.95,
        "Descripcion" => "Ligeros gofres belgas cubiertos con frutas del bosque y nata montada",
        "Calorias" => 900,
    ],
    "Tostada Francesa"=>
    [
        "Precio" => 4.50,
        "Descripcion" => "Dos gruesas rebanadas de nuestro pan frances casero",
        "Calorias" => 600,
    ],
    "Desayuno de la Casa"=>
    [
        "Precio" => 6.95,
        "Descripcion" => "Dos huevos, baicon o salchicha, tostadas y patatas fritas",
        "Calorias" => 950,
    ],
];
$desayuno = $_POST["desayuno"];

function desayunosSonValidos($d){
    return $d == "Gofres Belgas" || $d == "Gofres Belgas con Fresas" || $d == "Gofres Belgas con Frutos del Bosque" 
    || $d == "Tostada Francesa" || $d == "Desayuno de la Casa";
}

function tablaDesayunos($jsonphp, $d){
    return "<h2>$d</h2>
    <style>
        table, tr, th, td {
        border: 1px solid black;
        }
    </style>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Descripción</th>
            <th>Calorías</th>
        </tr>
        <tr>
            <td>$d</td>
            <td>".$jsonphp["$d"]["Precio"]."</td>
            <td>".$jsonphp["$d"]["Descripcion"]."</td>
            <td>".$jsonphp["$d"]["Calorias"]."</td>
        </tr>
    </table>";
}

function mostrar($jsonphp,$d){
    if(desayunosSonValidos($d)){
        return tablaDesayunos($jsonphp,$d);
    } else return "<p> El desayuno no esta en la carta </p>";
}
echo mostrar($jsonphp,$desayuno);
?>
<?php

$json = '
{
    "nombre":"Jonh Doe",
    "profesion":"Programador",
    "edad":25,
    "lenguajes":["PHP","Javascript","Dart"],
    "disponibilidadParaViajar":true,
    "rangoProfesional": {
        "aniosDeExperiencia": 12,
        "nivel": "Senior"
    }
  }
';

$jsonPHP = json_decode($json);

$dato = $_POST["dato"];

function esDatoValido($d){
    return $d == 'nombre' || $d == 'profesion' || $d == 'edad' || $d == 'lenguajes' 
            || $d == 'disponibilidadParaViajar' || $d == 'aniosDeExperiencia' || $d == 'nivel' ;
}

function esDatoSimple($d){
    return esDatoValido($d) && $d != 'lenguajes';
}

function devolverDatoSimple($jsonPHP, $d){
    if($d != 'aniosDeExperiencia' &&  $d != 'nivel'){
        return "<p>".$jsonPHP->{$d}."</p>";
    }else{
        return "<p>".$jsonPHP->{"rangoProfesional"}->{$d}."</p>";
    }
}

function devolverLenguajes($jsonPHP){
    
    return "<ol><li>".$jsonPHP->{"lenguajes"}[0].
    "</li><li>".$jsonPHP->{"lenguajes"}[1].
    "</li><li>".$jsonPHP->{"lenguajes"}[2]."</li></ol>";
    
}

function respuestaUsuario($jsonPHP, $d){
    if(esDatoValido($d)){
        if(esDatoSimple($d)){
            return devolverDatoSimple($jsonPHP, $d);
        }else{
            return devolverLenguajes($jsonPHP);
        }
    }else{
        return "<p>El dato solicitado no existe</p>";
    }
}

echo respuestaUsuario($jsonPHP, $dato);

?>
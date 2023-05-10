<?php

include("Conexion_BD.php");

$nombre=$_POST['nombre'];

if($conexion){
    echo "$nombre estás conectado";
}else{
    echo "$nombre no te has conectado";
}

?>
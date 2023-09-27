<?php
$nombre = $_POST["nombre"];
$config = include 'config_DB.php';
$conexion = new PDO('mysql:host=' . $config['db']['host'], $config['db']['user'], $config['db']['pass'], $config['db']['options']);
if($conexion){
    echo "Hola $nombre has conectado y el nombre de la Base de Datos es '$nombre_BD'";
}else{
    echo "Hola $nombre no has conectado";
}
?>

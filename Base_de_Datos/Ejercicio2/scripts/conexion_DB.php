<?php
$nombre = $_POST["nombre"];
$config = include 'config_DB.php';
$conexion = new PDO('mysql:host=' . $config['db']['host'], $config['db']['user'], $config['db']['pass'], $config['db']['options']);
if($conexion){
    echo "Hola $nombre has conectado y tu usuario es '$usuario'";
}else{
    echo "Hola $nombre no has conectado";
}
?>

<?php
function conectar_DB(){
    $config = include 'config_DB.php';

    $dsn = 'mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['name'];
        
    $conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);
    return $conexion;
}
?>
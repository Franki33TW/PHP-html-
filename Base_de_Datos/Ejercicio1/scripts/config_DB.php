<?php

$nombre_BD = $_POST['Nombre_BD'];

return [
  'db' => [
    'host' => 'localhost',
    'user' => 'root',
    'pass' => '',
    'name' => ''.$nombre_BD.'',
    'options' => [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]
  ]
];
?>

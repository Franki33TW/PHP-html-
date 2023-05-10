<?php

$usuario = $_POST['Usuario'];

return [
  'db' => [
    'host' => 'localhost',
    'user' => ''.$usuario.'',
    'pass' => '',
    'name' => 'tutorial_crud',
    'options' => [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]
  ]
];
?>
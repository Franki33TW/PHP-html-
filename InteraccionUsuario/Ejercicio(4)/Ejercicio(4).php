<?php

$usuario = "Franki";
$contraseña = "12345";
$entrada_usuario = $_POST['usuario'];
$entrada_contraseña = $_POST['contraseña'];

if($entrada_usuario == $usuario and $entrada_contraseña == $contraseña){

  echo "El usuario y la contraseña son correctos";

} else {

  echo "El usuario o la contraseña son incorrectos";

}

?>
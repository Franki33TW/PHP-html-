<?php

include("Conexion_BD.php");

if(isset($_POST['boton'])){

    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $correo = $_POST['correo'];
    $edad = $_POST['edad'];

    $consulta = "INSERT INTO Alumnos(nombre, apellido, email, edad) VALUES ('$nombre', '$apellidos', '$correo', $edad)";
    $resultado = mysqli_query($conexion, $consulta);
    if($resultado){
        ?>
        <h3 class="ok">Te has registrado correctamente</h3>
        <?php
    }else{
        ?>
        <h3 class="bad">Ha ocurrido un error</h3>
        <?php
    }
}

?>
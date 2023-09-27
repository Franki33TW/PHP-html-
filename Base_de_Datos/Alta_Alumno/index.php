<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Alta de alumnos</title>
</head>
<body>
    <form method="POST">
        <h2>Alumnos<h2>
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="text" name="apellidos" placeholder="Apellidos" required>
        <input type="email" name="correo" placeholder="Correo electrónico" required>
        <input type="int" name="edad" placeholder="Edad" required>
        <input type="submit" name="boton" value="Registrar">
    </form>

    <?php
        include("Confirmacion.php");
    ?>  
</body>
</html>
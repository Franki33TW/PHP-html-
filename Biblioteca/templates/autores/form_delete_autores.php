<?php

echo '<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2 class="mt-4">Borrar un autor</h2>
      <hr>
      <form method="POST" action="../../scripts/autores/baja_autor.php">

        <div class="form-group">
          <label for="autores">Datos Autores</label>
          <select name="autores">';
          include '../../scripts/conexion_DB.php';

          try {
            $conexion = conectar_DB();
            $autores = $conexion->query("SELECT id,nombre, apellidos  FROM autores");
          
            while ($row = $autores->fetch()) {
                echo '<option value="'.$row[0].'">'.$row[1].' '.$row[2].'</option>';
            }
          echo '</select>
          </div>';
        echo '<div class="form-group">
          <input type="submit" name="borrar_autor" class="btn btn-primary" value="Borrar Autor">
        </div>
      </form>
    </div>
  </div>
</div>';

          }catch(PDOException $error) {
            echo $error->getMessage();
          }


?>
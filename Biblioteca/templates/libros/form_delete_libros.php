<?php

echo '<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2 class="mt-4">Borrar un autor</h2>
      <hr>
      <form method="POST" action="../../scripts/libros/baja_libro.php">

        <div class="form-group">
          <label for="libros">Datos Libros</label>
          <select name="libros">';
          include '../../scripts/conexion_DB.php';

          try {
            $conexion = conectar_DB();
            $libros = $conexion->query("SELECT id, tema, titulo  FROM libros");
          
            while ($row = $libros->fetch()) {
                echo '<option value="'.$row[0].'">('.$row[1].') - '.$row[2].'</option>';
            }
          echo '</select>
          </div>';
        echo '<div class="form-group">
          <input type="submit" name="borrar_libro" class="btn btn-primary" value="Borrar Libro">
        </div>
      </form>
    </div>
  </div>
</div>';

          }catch(PDOException $error) {
            echo $error->getMessage();
          }


?>
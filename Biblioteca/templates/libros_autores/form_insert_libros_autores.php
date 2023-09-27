<?php

echo '<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2 class="mt-4">Insertar Libro-Autor</h2>
      <hr>
      <form method="POST" action="../../scripts/libros_autores/alta_libro_Autor.php">

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
          <label for="autores">Datos Autores</label>
          <select name="autores">';
          $autores = $conexion->query("SELECT id, nombre, apellidos FROM autores");
          
            while ($row = $autores->fetch()) {
                echo '<option value="'.$row[0].'">'.$row[1]. ' '.$row[2].'</option>';
            }
            echo '</select>
            </div>';

        echo '<div class="form-group">
          <input type="submit" name="insertar_libro_autor" class="btn btn-primary" value="Insertar Libro-Autor">
        </div>
      </form>
    </div>
  </div>
</div>';

          }catch(PDOException $error) {
            echo $error->getMessage();
          }


?>
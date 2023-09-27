<?php

echo '<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2 class="mt-4">Borrar un libro_autor</h2>
      <hr>
      <form method="POST" action="../../scripts/libros_autores/baja_libro_autor.php">

        <div class="form-group">
          <label for="autores">Datos Autores</label>
          <select name="libros_autores">';
          include '../../scripts/conexion_DB.php';

          try {
            $conexion = conectar_DB();
            $libros_autores = $conexion->query("SELECT libros_autores.id, libros.titulo,autores.nombre, autores.apellidos
            FROM libros,autores, libros_autores
            WHERE (libros_autores.id,libros.id, autores.id) 
            IN (SELECT id, fk_id_libro, fk_id_autor FROM libros_autores);");
          
            while ($row = $libros_autores->fetch()) {
                echo '<option value="'.$row[0].'">'.$row[1].' - '.$row[2].' '.$row[3] .'</option>';
            }
          echo '</select>
          </div>';
        echo '<div class="form-group">
          <input type="submit" name="borrar_libro_autor" class="btn btn-primary" value="Borrar Libro Autor">
        </div>
      </form>
    </div>
  </div>
</div>';

          }catch(PDOException $error) {
            echo $error->getMessage();
          }


?>
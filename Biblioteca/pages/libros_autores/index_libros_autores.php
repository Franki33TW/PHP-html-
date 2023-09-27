<?php include "../../templates/header.php"; ?>
<?php
    include '../../scripts/conexion_DB.php';
    try {
      $conexion = conectar_DB();
      $resultado = $conexion->query("SELECT libros.titulo,autores.nombre, autores.apellidos
                                            FROM libros,autores
                                            WHERE (libros.id, autores.id) 
                                            IN (SELECT fk_id_libro, fk_id_autor FROM libros_autores);");
      echo '<a class="btn btn-primary" href="index_insert_libros_autores.php">Alta</a>
            <a class="btn btn-primary" href="index_delete_libros_autores.php" >Borrar</a>';      

      echo '<table class="table table-striped custom-table display" id="tabla">
                        <thead>
                            <tr>
                                <th scope="col">Título Libro</th>
                                <th scope="col">Nombre Autor</th>
                                <th scope="col">Apellidos Autor</th>
                            </tr>
                        </thead>
                        <tbody>';
                           while ($row = $resultado->fetch()) {
                                  echo '<tr scope="row">';
                                  echo '<td>'.$row[0].'</td>';
                                  echo '<td>'.$row[1].'</td>';
                                  echo '<td>'.$row[2].'</td></tr>';

                           }
                       echo  '</tbody></table>';
    }catch(PDOException $error) {
      echo $error->getMessage();
    }
  
  ?>
<?php include "../../templates/footer.php"; ?>
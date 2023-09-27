<?php include "../../templates/header.php"; ?>
<?php
    include '../../scripts/conexion_DB.php';
    try {
      $conexion = conectar_DB();
      $librosResultado = $conexion->query("SELECT * FROM libros");
      echo '<a class="btn btn-primary" href="index_update_libros.php">Editar</a>
            <a class="btn btn-primary" href="index_insert_libros.php">Alta</a>
            <a class="btn btn-primary" href="index_delete_libros.php" >Borrar</a>';      

      echo '<table class="table table-striped custom-table display" id="tabla">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Título</th>
                                <th scope="col">Tema</th>
                                <th scope="col">Número de Páginas</th>
                                <th scope="col">Prestado</th>
                                <th scope="col">Fecha Última Reserva</th>
                            </tr>
                        </thead>
                        <tbody>';
                           while ($row = $librosResultado->fetch()) {
                                  echo '<tr scope="row">';
                                  echo '<td>'.$row[0].'</td>';
                                  echo '<td>'.$row[1].'</td>';
                                  echo '<td>'.$row[2].'</td>';
                                  echo '<td>'.$row[3].'</td>';
                                  echo '<td>'.$row[4].'</td>';
                                  echo '<td>'.$row[5].'</td></tr>';

                           }
                       echo  '</tbody></table>';
    }catch(PDOException $error) {
      echo $error->getMessage();
    }
  
  ?>
<?php include "../../templates/footer.php"; ?>
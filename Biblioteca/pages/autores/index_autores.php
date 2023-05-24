<?php include "../../templates/header.php"; ?>
<?php
    include '../../scripts/conexion_DB.php';
    try {
      $conexion = conectar_DB();
      $autoresResultado = $conexion->query("SELECT * FROM autores");
      echo '<a class="btn btn-primary" href="index_update_autores.php">Editar</a>
            <a class="btn btn-primary" href="index_insert_autores.php">Alta</a>
            <a class="btn btn-primary" href="index_delete_autores.php">Borrar</a>';      

      echo '<table class="table table-striped custom-table display" id="tabla">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellidos</th>
                                <th scope="col">DNI</th>
                                <th scope="col">Tema 1</th>
                                <th scope="col">Tema 2</th>
                            </tr>
                        </thead>
                        <tbody>';
                           while ($row = $autoresResultado->fetch()) {
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
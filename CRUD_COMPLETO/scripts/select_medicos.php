<?php include "../templates/header.php"; ?>
<?php

    $config = include 'config_DB.php';

    try {
      $dsn = 'mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['name'];
      
      $conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);
      $medicosResultado = $conexion->query("SELECT * FROM medicos");
      echo '<a class="btn btn-primary" href="../templates/index_update_medicos.php">Editar</a>
            <a class="btn btn-primary" href="../templates/index_insert_medicos.php">Alta</a>
            <a class="btn btn-primary" href="../templates/index_delete_medicos.php" >Borrar</a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a class="btn btn-primary" href="..">Menú</a>';
      echo '<table class="table table-striped custom-table display" id="tabla">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Primer apellido</th>
                                <th scope="col">Segundo apellido</th>
                                <th scope="col">DNI</th>
                                <th scope="col">Turno</th>
                                <th scope="col">Especialidad</th>
                            </tr>
                        </thead>
                        <tbody>';
                           while ($row = $medicosResultado->fetch()) {
                                  echo '<tr scope="row">';
                                  echo '<td>'.$row['id_medico'].'</td>';
                                  echo '<td>'.$row['nombre'].'</td>';
                                  echo '<td>'.$row['apellido1'].'</td>';
                                  echo '<td>'.$row['apellido2'].'</td>';
                                  echo '<td>'.$row['dni'].'</td>';
                                  echo '<td>'.$row['turno'].'</td>';
                                  echo '<td>'.$row['especialidad'].'</td></tr>';

                           }
                       echo  '</tbody></table>';
    }catch(PDOException $error) {
      echo $error->getMessage();
    }
  
  ?>



<?php include "../templates/footer.php"; ?>
<?php include "../templates/header.php"; ?>
<?php

    $config = include 'config_DB.php';

    try {
      $dsn = 'mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['name'];
      
      $conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);
      $pacientesResultado = $conexion->query("SELECT * FROM pacientes");
      echo '<a class="btn btn-primary" href="../templates/index_update_pacientes.php">Editar</a>
            <a class="btn btn-primary" href="../templates/index_insert_pacientes.php">Alta</a>
            <a class="btn btn-primary" href="../templates/index_delete_pacientes.php">Borrar</a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a class="btn btn-primary" href="..">Menú</a>';      
      echo '<table class="table table-striped custom-table display" id="tabla">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Primer apellido</th>
                                <th scope="col">DNI</th>
                                <th scope="col">Fecha de ingreso</th>
                                <th scope="col">Cama</th>
                            </tr>
                        </thead>
                        <tbody>';
                           while ($row = $pacientesResultado->fetch()) {
                                  echo '<tr scope="row">';
                                  echo '<td>'.$row['id_paciente'].'</td>';
                                  echo '<td>'.$row['nombre'].'</td>';
                                  echo '<td>'.$row['apellido1'].'</td>';
                                  echo '<td>'.$row['dni'].'</td>';
                                  echo '<td>'.$row['fechaIngreso'].'</td>';
                                  echo '<td>'.$row['fk_id_cama'].'</td></tr>';
                           }
                       echo  '</tbody></table>';
    }catch(PDOException $error) {
      echo $error->getMessage();
    }
  
  ?>
<?php include "../templates/footer.php"; ?>
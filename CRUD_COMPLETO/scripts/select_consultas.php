<?php include "../templates/header.php"; ?>
<?php

    $config = include 'config_DB.php';

    try {
      $dsn = 'mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['name'];
      
      $conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);
      $consultasResultado = $conexion->query("SELECT * FROM pacientes_medicos");
      echo '<a class="btn btn-primary" href="../templates/index_update_consultas.php">Editar</a>
            <a class="btn btn-primary" href="../templates/index_insert_consultas.php">Alta</a>
            <a class="btn btn-primary" href="../templates/index_delete_consultas.php" >Borrar</a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a class="btn btn-primary" href="..">Menú</a>';
      echo '<table class="table table-striped custom-table display" id="tabla">
                        <thead>
                            <tr>
                                <th scope="col">Número de consulta</th>
                                <th scope="col">ID Paciente</th>
                                <th scope="col">ID Médico</th>
                            </tr>
                        </thead>
                        <tbody>';
                           while ($row = $consultasResultado->fetch()) {
                                  echo '<tr scope="row">';
                                  echo '<td>'.$row['id_paciente_medico'].'</td>';
                                  echo '<td>'.$row['fk_id_paciente'].'</td>';
                                  echo '<td>'.$row['fk_id_medico'].'</td>';
                           }
                       echo  '</tbody></table>';
    }catch(PDOException $error) {
      echo $error->getMessage();
    }
  
  ?>



<?php include "../templates/footer.php"; ?>
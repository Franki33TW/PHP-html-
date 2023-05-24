<?php

echo '<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2 class="mt-4">Crea una consulta</h2>
      <hr>
      <form method="post" action="../scripts/alta_consultas.php">

        <div class="form-group">
          <label for="paciente">Paciente: </label>
          <select name="paciente">
          <option value="OpcionDefecto">Elija un DNI</option>';
          $config = include '../scripts/config_DB.php';

          try {
            $dsn = 'mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['name'];
            
            $conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);
            $dnisPacientesResultado = $conexion->query("SELECT DISTINCT dni FROM pacientes");
          
            while ($row = $dnisPacientesResultado->fetch()) {
                echo '<option value="'.$row[0].'">'.$row[0].'</option>';
            }
          echo '</select>
          </div>';

          echo '<div class="form-group">
          <label for="medico">Medico: </label>
          <select name="medico">
          <option value="OpcionDefecto">Elija un medico</option>';
          $medicosResultado = $conexion->query("SELECT dni, especialidad, nombre, apellido1, apellido2 FROM medicos");
          
          while ($row = $medicosResultado->fetch()) {
              echo '<option value="'.$row[0].'">('.$row[1].') - '.$row[2].' '.$row[3].' '.$row[4].'</option>';
          }

          echo '</select>
          </div>';
        echo '<div class="form-group">
          <input type="submit" name="insertar_consulta" class="btn btn-primary" value="Insertar Consulta">
        </div>
      </form>
    </div>
  </div>
</div>';

          }catch(PDOException $error) {
            echo $error->getMessage();
          }


?>
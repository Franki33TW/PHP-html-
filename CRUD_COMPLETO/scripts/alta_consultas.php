<?php
if (isset($_POST['insertar_consulta'])) {
  $resultado = [
    'error' => false,
    'mensaje' => 'La consulta se ha creado con éxito'
  ];
  $config = include 'config_DB.php';

  try {
    $dsn = 'mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['name'];
    
    $conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);
    if($_POST['paciente']=="OpcionDefecto" || $_POST['medico']=="OpcionDefecto"){
      echo "Debes elegir un paciente y un medico para poder dar de alta la consulta";
    }else{
      $paciente = array(
        "dni"   => $_POST['paciente']
      );

      $consultaIdPaciente = "SELECT id_paciente FROM pacientes WHERE dni=:dni LIMIT 1";
      $sentencia = $conexion->prepare($consultaIdPaciente);
      $sentencia->execute($paciente);
      $idPaciente = $sentencia->fetch()[0];

      $medico = array(
        "dni"   => $_POST['medico']
      );

      $consultaIdMedico = "SELECT id_medico FROM medicos WHERE dni=:dni";
      $sentencia2 = $conexion->prepare($consultaIdMedico);
      $sentencia2->execute($medico);
      $idMedico = $sentencia2->fetch()[0];

      $insert = "INSERT INTO Pacientes_medicos VALUES(NULL, $idPaciente, $idMedico)";
      $conexion->query($insert);

    }
   
    

  } catch(PDOException $error) {
    $resultado['error'] = true;
    $resultado['mensaje'] = $error->getMessage();
  }
}
?>

<?php include "../templates/header.php"; ?>

<?php
if (isset($resultado)) {
  ?>
  <div class="container mt-3">
    <div class="row">
      <div class="col-md-12">
        <div class="alert alert-<?= $resultado['error'] ? 'danger' : 'success' ?>" role="alert">
          <?= $resultado['mensaje'] ?>
        </div>
      </div>
    </div>
  </div>
  <?php
}

?>

<?= '<a class="btn btn-primary" href="select_consultas.php">Volver</a>' ?>

<?php include "../templates/footer.php"; ?>

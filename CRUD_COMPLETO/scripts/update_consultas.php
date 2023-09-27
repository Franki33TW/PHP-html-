<?php
if (isset($_POST['actualizar_consulta'])) {
    $resultado = [
      'error' => false,
      'mensaje' => 'Se ha actualizado la consulta con éxito'
    ];
    $config = include 'config_DB.php';

    try {
      $dsn = 'mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['name'];
      
      $conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);

          $consultaSQL = "UPDATE pacientes_medicos SET fk_id_paciente=:fk_id_paciente, fk_id_medico=:fk_id_medico 
          WHERE id_paciente_medico=:id_paciente_medico";
          $consulta = array(
            "id_paciente_medico"   => $_POST['id_consulta'],  
            "fk_id_paciente"   => $_POST['id_paciente'],
            "fk_id_medico" => $_POST['id_medico']
          );
      
      $sentencia = $conexion->prepare($consultaSQL);
      $sentencia->execute($consulta);
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

<?php
if (isset($_POST['boton_paciente'])) {
    $resultado = [
      'error' => false,
      'mensaje' => 'Se ha actualizado el DNI del paciente con éxito'
    ];
    $config = include 'config_DB.php';

    try {
      $dsn = 'mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['name'];

      $conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);

      $consultaSQL = "UPDATE pacientes SET dni = :dni_paciente WHERE id_paciente = :id_paciente";
          $paciente = array(
            "id_paciente"   => $_POST['id_paciente'],
            "dni_paciente"  => $_POST['dni_paciente']
          );

      $sentencia = $conexion->prepare($consultaSQL);
      $sentencia->execute($paciente);
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
<?php include "../templates/footer.php"; ?>

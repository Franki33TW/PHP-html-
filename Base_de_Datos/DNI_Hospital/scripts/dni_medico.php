<?php
if (isset($_POST['boton_medico'])) {
    $resultado = [
      'error' => false,
      'mensaje' => 'Se ha actualizado el DNI del médico con éxito'
    ];
    $config = include 'config_DB.php';

    try {
      $dsn = 'mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['name'];

      $conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);

          $consultaSQL = "UPDATE medicos SET dni = :dni_medico WHERE id_medico = :id_medico";
          $medico = array(
            "id_medico"   => $_POST['id_medico'],
            "dni_medico"  => $_POST['dni_medico']
          );

      $sentencia = $conexion->prepare($consultaSQL);
      $sentencia->execute($medico);
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

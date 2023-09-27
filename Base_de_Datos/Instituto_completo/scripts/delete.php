<?php
if (isset($_POST ['boton_delete'])) {
    $resultado = [
      'error' => false,
      'mensaje' => 'Se ha borrado el alumno con éxito'
    ];
    $config = include 'config_DB.php';

    try {
      $dsn = 'mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['name'];

      $conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);

          $consultaSQL = "DELETE FROM alumnos WHERE id=:id";
          $alumno = array(
            "id"   => $_POST['id']
          );

      $sentencia = $conexion->prepare($consultaSQL);
      $sentencia->execute($alumno);
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

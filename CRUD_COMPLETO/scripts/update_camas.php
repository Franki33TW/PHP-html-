<?php
if (isset($_POST['actualizar_cama'])) {
    $resultado = [
      'error' => false,
      'mensaje' => 'Se ha actualizado la cama con éxito'
    ];
    $config = include 'config_DB.php';

    try {
      $dsn = 'mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['name'];
      
      $conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);

          $consultaSQL = "UPDATE camas SET  zona=:zona ,planta=:planta, fechaCambioSabanas=:fechaCambioSabanas 
          WHERE id_cama=:id_cama";
          $cama = array(
            "id_cama"   => $_POST['id_cama'],  
            "zona"   => $_POST['zona'],
            "planta" => $_POST['planta'],
            "fechaCambioSabanas" => $_POST['fecha']
          );
      
      $sentencia = $conexion->prepare($consultaSQL);
      $sentencia->execute($cama);
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

<?= '<a class="btn btn-primary" href="select_camas.php">Volver</a>' ?>

<?php include "../templates/footer.php"; ?>

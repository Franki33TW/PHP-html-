<?php
if (isset($_POST['borrar_paciente'])) {
    $resultado = [
      'error' => false,
      'mensaje' => 'Se ha borrado el paciente con éxito'
    ];
    $config = include 'config_DB.php';

    try {
      $dsn = 'mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['name'];
      
      $conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);
    
      $consultaSQL = "DELETE FROM pacientes WHERE id_paciente=".$_POST['id_paciente'];
      $conexion->query($consultaSQL);
      
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

<?= '<a class="btn btn-primary" href="select_pacientes.php">Volver</a>' ?>

<?php include "../templates/footer.php"; ?>

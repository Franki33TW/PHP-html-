<?php
if (isset($_POST['insertar_paciente'])) {
  $resultado = [
    'error' => false,
    'mensaje' => 'Se ha añadido el paciente con éxito'
  ];
  $config = include 'config_DB.php';

  try {
    $dsn = 'mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['name'];
    $conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);

    $paciente = array(
      "nombre" => $_POST['nombre'],
      "apellido1" => $_POST['apellido1'],
      "dni" => $_POST['dni'],
      "fechaIngreso" => $_POST['fecha'],
      "fk_id_cama" => $_POST['cama']
    );
    
    $consultaSQL = "INSERT INTO pacientes ";
    $consultaSQL .= "values (null, :" . implode(", :", array_keys($paciente)) . ")";

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

<?= '<a class="btn btn-primary" href="select_pacientes.php">Volver</a>' ?>

<?php include "../templates/footer.php"; ?>

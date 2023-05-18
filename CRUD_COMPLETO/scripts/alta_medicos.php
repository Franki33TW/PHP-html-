<?php
if (isset($_POST['insertar_medico'])) {
  $resultado = [
    'error' => false,
    'mensaje' => 'Se ha añadido el médico con éxito'
  ];
  $config = include 'config_DB.php';

  try {
    $dsn = 'mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['name'];
    $conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);

    $medico = array(
      "nombre"   => $_POST['nombre'],
      "apellido1" => $_POST['apellido1'],
      "apellido2" => $_POST['apellido2'],
      "dni" => $_POST['dni'],
      "turno" => $_POST['turno'],
      "especialidad" => $_POST['especialidad']
    );
    
    $consultaSQL = "INSERT INTO medicos ";
    $consultaSQL .= "VALUES (null, :" . implode(", :", array_keys($medico)) . ")";

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

<?= '<a class="btn btn-primary" href="select_medicos.php">Volver</a>' ?>

<?php include "../templates/footer.php"; ?>

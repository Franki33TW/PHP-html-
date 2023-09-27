<?php
if (isset($_POST['boton_insert'])) {
  $resultado = [
    'error' => false,
    'mensaje' => 'El alumno ' . $_POST['nombre'] . ' ha sido creado con éxito'
  ];
  $config = include 'config_DB.php';

  try {
    $dsn = 'mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['name'];
    $conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);

    $alumno = array(
      "n_exp"     => $_POST['n_exp'],
      "nombre"    => $_POST['nombre'],
      "apellidos" => $_POST['apellidos'],
      "fec_nac"   => $_POST['fec_nac'],
      "curso"     => $_POST['curso'],
      "delegado"  => $_POST['delegado']
    );

    $consultaSQL = "INSERT INTO alumnos ";
    $consultaSQL .= "VALUES (null, :" . implode(", :", array_keys($alumno)) . ")";

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

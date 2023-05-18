<?php
if (isset($_POST['actualizar_medico'])) {
    $resultado = [
      'error' => false,
      'mensaje' => 'Se ha actualizado el médico con éxito'
    ];
    $config = include 'config_DB.php';

    try {
      $dsn = 'mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['name'];
      
      $conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);

          $consultaSQL = "UPDATE medicos SET nombre=:nombre, apellido1=:apellido1, apellido2=:apellido2, dni=:dni, turno=:turno, especialidad=:especialidad 
          WHERE id_medico=:id_medico";
           $medico = array(
            "id_medico" => $_POST['id_medico'],
            "nombre"   => $_POST['nombre'],
            "apellido1" => $_POST['apellido1'],
            "apellido2" => $_POST['apellido2'],
            "dni" => $_POST['dni'],
            "turno" => $_POST['turno'],
            "especialidad" => $_POST['especialidad']
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

<?= '<a class="btn btn-primary" href="select_medicos.php">Volver</a>' ?>

<?php include "../templates/footer.php"; ?>

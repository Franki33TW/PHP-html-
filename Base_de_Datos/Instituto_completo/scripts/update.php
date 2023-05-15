<?php
if (isset($_POST ['boton_update'])) {
    $resultado = [
      'error' => false,
      'mensaje' => 'Se ha actualizado el alumno con éxito'
    ];
    $config = include 'config_DB.php';

    try {
      $dsn = 'mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['name'];

      $conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);

          $consultaSQL = "UPDATE alumnos SET n_exp=:n_exp, nombre=:nombre, apellidos=:apellidos, fecha_nac=:fec_nac, curso=:curso, delegado=:delegado
          WHERE id=:id";
          $alumno = array(
            "id"        => $_POST['id'],
            "n_exp"     => $_POST['n_exp'],
            "nombre"    => $_POST['nombre'],
            "apellidos" => $_POST['apellidos'],
            "fec_nac"   => $_POST['fec_nac'],
            "curso"     => $_POST['curso'],
            "delegado"  => $_POST['delegado']
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

<?php
if (isset($_POST['actualizar_cama'])) {
  if(isset($_POST['id_cama'])){
    $resultado = [
      'error' => false,
      'mensaje' => 'Se ha actualizado la cama con éxito'
    ];
    $config = include 'config_DB.php';

    try {
      $dsn = 'mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['name'];

      $conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);

      $cama=[];
      if(isset($_POST["zona"]) && isset($_POST["planta"]) && isset($_POST["fechaCambioSabanas"])){
          $consultaSQL = "UPDATE camas SET  zona=:zona ,planta=:planta, fechaCambioSabanas=:fechaCambioSabanas
          WHERE id_cama=:id_cama";
          $cama = array(
            "id_cama"   => $_POST['id_cama'],
            "zona"   => $_POST['zona'],
            "planta" => $_POST['planta'],
            "fechaCambioSabanas" => $_POST['fechaCambioSabanas']
          );

      }
      if(isset($_POST['id_cama']) && isset($_POST['planta'])){
        $consultaSQL = "UPDATE camas SET  zona=:zona ,planta=:planta
        WHERE id_cama=:id_cama";
        $cama = array(
          "id_cama"   => $_POST['id_cama'],
          "zona"   => $_POST['zona'],
          "planta" => $_POST['planta'],
        );

      }
      if(isset($_POST["zona"])){
        $consultaSQL = "UPDATE camas SET  zona=:zona
        WHERE id_cama=:id_cama";
        $cama = array(
          "id_cama"   => $_POST['id_cama'],
          "zona"   => $_POST['zona']
        );

      }
      if(isset($_POST["planta"]) && isset($_POST["fechaCambioSabanas"])){
        $consultaSQL = "UPDATE camas SET  planta=:planta, fechaCambioSabanas=:fechaCambioSabanas
        WHERE id_cama=:id_cama";
        $cama = array(
          "id_cama"   => $_POST['id_cama'],
          "planta" => $_POST['planta'],
          "fechaCambioSabanas" => $_POST['fechaCambioSabanas']
        );

      }
      if(isset($_POST["planta"])){
        $consultaSQL = "UPDATE camas SET  planta=:planta
        WHERE id_cama=:id_cama";
        $cama = array(
          "id_cama"   => $_POST['id_cama'],
          "planta" => $_POST['planta'],
        );

      }
      if(isset($_POST["fechaCambioSabanas"])){
        $consultaSQL = "UPDATE camas SET fechaCambioSabanas=:fechaCambioSabanas
        WHERE id_cama=:id_cama";
        $cama = array(
          "id_cama"   => $_POST['id_cama'],
          "fechaCambioSabanas" => $_POST['fechaCambioSabanas']
        );

      }
      $sentencia = $conexion->prepare($consultaSQL);
      $sentencia->execute($cama);
    } catch(PDOException $error) {
      $resultado['error'] = true;
      $resultado['mensaje'] = $error->getMessage();
    }
  }else{
    $resultado = [
      'error' => true,
      'mensaje' => 'El id es obligatorio para poder actualizar una cama'
    ];
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

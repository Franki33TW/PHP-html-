<?php
if (isset($_POST['insertar_autor'])) {
  $resultado = [
    'error' => false,
    'mensaje' => 'Se ha añadido el autor con éxito'
  ];

  include '../../scripts/conexion_DB.php';

  try {
    $conexion = conectar_DB();

    $autor = array(
      "nombre" => $_POST["nombre"],
      "apellidos" => $_POST["apellidos"],
      "dni" => $_POST["dni"],
      "tema1" => $_POST["tema1"],
      "tema1" => $_POST["tema2"]
    );

    $insert = "INSERT INTO autores VALUES(NULL, :nombre, :apellidos, :dni, :tema1, :tema2)";
    $sentencia = $conexion->prepare($insert);
    $sentencia->execute($autor);

  } catch(PDOException $error) {
    $resultado['error'] = true;
    $resultado['mensaje'] = $error->getMessage();
  }
}
?>

<?php include "../../templates/header.php"; ?>

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
  <br>
  <a class="btn btn-primary" href="../../index.php">Volver al index</a>
  <?php
}

?>
<?php include "../../templates/footer.php"; ?>

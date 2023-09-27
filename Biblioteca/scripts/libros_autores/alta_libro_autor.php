<?php
if (isset($_POST['insertar_libro_autor'])) {
  $resultado = [
    'error' => false,
    'mensaje' => 'Se ha añadido la relación libro_autor con éxito'
  ];

  include '../../scripts/conexion_DB.php';

  try {
    $conexion = conectar_DB();
    $insert = "INSERT INTO libros_autores VALUES(NULL, :fk_id_libro, :fk_id_autor)";
    $libro_autor = array(
      "fk_id_libro" => $_POST["libros"],
      "fk_id_autor" => $_POST["autores"]

    );
    $sentencia = $conexion->prepare($insert);
    $sentencia->execute($libro_autor);

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

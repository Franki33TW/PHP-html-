<?php
if (isset($_POST['borrar_libro'])) {
  $resultado = [
    'error' => false,
    'mensaje' => 'Se ha borrado el libro con éxito'
  ];

  include '../../scripts/conexion_DB.php';
  try {
    $conexion = conectar_DB();
    $libro = array(
      "id" => $_POST['libros']
    );
    
    $delete = "DELETE FROM libros WHERE id=:id";
    $sentencia = $conexion->prepare($delete);
    $sentencia->execute($libro);

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

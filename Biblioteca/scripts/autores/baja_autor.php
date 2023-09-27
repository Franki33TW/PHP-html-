<?php
if (isset($_POST['borrar_autor'])) {
  $resultado = [
    'error' => false,
    'mensaje' => 'Se ha borrado el autor con éxito'
  ];

  include '../../scripts/conexion_DB.php';
  try {
    $conexion = conectar_DB();
    $autor = array(
      "id" => $_POST['autores']
    );
    
    $delete = "DELETE FROM autores WHERE id=:id";
    $sentencia = $conexion->prepare($delete);
    $sentencia->execute($autor);

  } catch(PDOException $error) {
    $resultado['error'] = true;
    $resultado['mensaje'] ="No se puede borrar el autor porque se encuentra asociado a libros existentes";
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

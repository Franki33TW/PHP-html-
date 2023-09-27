<?php
if (isset($_POST['borrar_libro_autor'])) {
  $resultado = [
    'error' => false,
    'mensaje' => 'Se ha borrado la relación libro autor con éxito'
  ];

  include '../../scripts/conexion_DB.php';
  try {
    $conexion = conectar_DB();
    $libro_autor = array(
      "id" => $_POST['libros_autores']
    );
    
    $delete = "DELETE FROM libros_autores WHERE id=:id";
    $sentencia = $conexion->prepare($delete);
    $sentencia->execute($libro_autor);

  } catch(PDOException $error) {
    $resultado['error'] = true;
    $resultado['mensaje'] =$error->getMessage();
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

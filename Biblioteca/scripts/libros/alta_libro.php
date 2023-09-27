<?php
if (isset($_POST['insertar_libro'])) {
  $resultado = [
    'error' => false,
    'mensaje' => 'Se ha añadido el libro con éxito'
  ];

  include '../../scripts/conexion_DB.php';

  try {
    $conexion = conectar_DB();

    $libro = array(
      "titulo" => $_POST["titulo"],
      "tema" => $_POST["tema"],
      "n_pag" => $_POST["n_pag"],
      "prestado" => $_POST["prestado"],
      "fecha_ult_res" => date('Y-m-d', strtotime($_POST["fecha"]))
    );
    $insert = "INSERT INTO libros VALUES(NULL, :titulo, :tema, :n_pag, :prestado, :fecha_ult_res)";
    $sentencia = $conexion->prepare($insert);
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

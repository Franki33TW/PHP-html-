<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2 class="mt-4">Alta de un autor</h2>
      <hr>
      <form method="POST" action="../../scripts/autores/alta_autor.php">
        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input type="text" name="nombre" class="form-control">
        </div>
        <div class="form-group">
          <label for="apellidos">Apellidos</label>
          <input type="text" name="apellidos" class="form-control">
        </div>
        <div class="form-group">
          <label for="dni">DNI</label>
          <input type="text" name="dni" class="form-control">
        </div>
        <div class="form-group">
          <label for="tema1">Tema 1</label>
          <input type="text" name="tema1" class="form-control">
        </div>
        <div class="form-group">
          <label for="tema2">Tema 2</label>
          <input type="text" name="tema2" class="form-control">
        </div>
        <div class="form-group">
          <input type="submit" name="insertar_autor" class="btn btn-primary" value="Insertar Autor">
        </div>
      </form>
    </div>
  </div>
</div>

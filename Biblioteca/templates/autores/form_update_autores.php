<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2 class="mt-4">Actualiza un autor</h2>
      <hr>
      <form method="POST" action="../../scripts/autores/update_autor.php">
      <div class="form-group">
          <label for="id">Id</label>
          <input type="text" name="id" class="form-control">
        </div>
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
          <input type="submit" name="actualizar_autor" class="btn btn-primary" value="Actualizar Autor">
        </div>
      </form>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2 class="mt-4">Borra un alumno</h2>
      <hr>
      <form method="post" action="scripts/delete.php">
        <div class="form-group">
          <label for="id">ID del alumno</label>
          <input type="int" name="id" class="form-control" required>
        </div>
        <div class="form-group">
          <input type="submit" name="boton_delete" class="btn btn-primary" value="Borrar">
        </div>
      </form>
    </div>
  </div>
</div>

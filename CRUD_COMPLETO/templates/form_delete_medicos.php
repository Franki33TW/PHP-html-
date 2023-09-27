<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2 class="mt-4">Borra un médico</h2>
      <hr>
      <form method="post" action="../scripts/delete_medicos.php">
        <div class="form-group">
          <label for="id_medico">Id</label>
          <input type="number" name="id_medico" class="form-control">
        </div>
        <div class="form-group">
          <input type="submit" name="borrar_medico" class="btn btn-primary" value="Borrar medico">
        </div>
      </form>
    </div>
  </div>
</div>

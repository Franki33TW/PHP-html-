<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2 class="mt-4">Borra un paciente</h2>
      <hr>
      <form method="post" action="../scripts/delete_pacientes.php">
        <div class="form-group">
          <label for="id_paciente">ID</label>
          <input type="text" name="id_paciente" class="form-control">
        </div>
        <div class="form-group">
          <input type="submit" name="borrar_paciente" class="btn btn-primary" value="Borrar paciente">
        </div>
      </form>
    </div>
  </div>
</div>

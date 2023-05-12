<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2 class="mt-4">Actualiza el DNI de los pacientes y los médicos</h2>
      <h3 class="mt-4">Pacientes</h3>
      <hr>
      <form method="post" action="scripts/dni_paciente.php">
        <div class="form-group">
          <label for="id_paciente">ID Paciente</label>
          <input type="int" name="id_paciente" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="dni_paciente">DNI Paciente</label>
          <input type="text" name="dni_paciente" class="form-control" required>
        </div>
        <div class="form-group">
          <input type="submit" name="boton_paciente" class="btn btn-primary" value="Actualizar DNI">
        </div>
        </form>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2 class="mt-4">Actualiza un paciente</h2>
      <hr>
      <form method="post" action="../scripts/update_pacientes.php">
      <div class="form-group">
          <label for="id_paciente">ID</label>
          <input type="number" name="id_paciente" class="form-control">
        </div>
      <div class="form-group">
          <label for="nombre">Nombre</label>
          <input type="text" name="nombre" class="form-control">
        </div>
        <div class="form-group">
          <label for="apellido1">Primer apellido</label>
          <input type="text" name="apellido1" class="form-control">
        </div>
        <div class="form-group">
          <label for="dni">DNI</label>
          <input type="text" name="dni" class="form-control">
        </div>
        <div class="form-group">
          <label for="fecha">Fecha de ingreso</label>
          <input type="date" name="fecha" class="form-control">
        </div>
        <div class="form-group">
          <label for="cama">Cama</label>
          <input type="number" name="cama" class="form-control">
        </div>
        <div class="form-group">
          <input type="submit" name="actualizar_paciente" class="btn btn-primary" value="Actualizar Paciente">
        </div>
      </form>
    </div>
  </div>
</div>

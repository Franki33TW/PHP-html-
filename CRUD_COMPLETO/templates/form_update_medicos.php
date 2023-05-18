<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2 class="mt-4">Actualiza un médico</h2>
      <hr>
      <form method="post" action="../scripts/update_medicos.php">
        <div class="form-group">
          <label for="id_medico">ID</label>
          <input type="number" name="id_medico" class="form-control">
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
          <label for="apellido2">Segundo apellido</label>
          <input type="text" name="apellido2" class="form-control">
        </div>
        <div class="form-group">
          <label for="dni">DNI</label>
          <input type="text" name="dni" class="form-control">
        </div>
        <div class="form-group">
          <label for="turno">Turno</label>
          <input type="text" name="turno" class="form-control">
        </div>
        <div class="form-group">
          <label for="especialidad">Especialidad</label>
          <input type="text" name="especialidad" class="form-control">
        </div>
        <div class="form-group">
          <input type="submit" name="actualizar_medico" class="btn btn-primary" value="Actualizar médico">
        </div>
      </form>
    </div>
  </div>
</div>

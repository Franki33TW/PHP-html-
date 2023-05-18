<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2 class="mt-4">Crea un médico</h2>
      <hr>
      <form method="post" action="../scripts/alta_medicos.php">
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
          <input type="submit" name="insertar_medico" class="btn btn-primary" value="Insertar médico">
        </div>
      </form>
    </div>
  </div>
</div>

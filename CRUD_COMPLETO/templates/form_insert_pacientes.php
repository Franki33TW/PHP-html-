<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2 class="mt-4">Crea un paciente</h2>
      <hr>
      <form method="post" action="../scripts/alta_pacientes.php">
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
          <input type="submit" name="insertar_paciente" class="btn btn-primary" value="Insertar Paciente">
        </div>
      </form>
    </div>
  </div>
</div>

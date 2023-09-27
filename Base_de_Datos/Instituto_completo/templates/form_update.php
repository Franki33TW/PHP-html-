<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2 class="mt-4">Actualiza los datos un alumno</h2>
      <hr>
      <form method="post" action="scripts/update.php">
        <div class="form-group">
          <label for="id">ID del alumno</label>
          <input type="int" name="id" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="n_exp">Nº de expediente</label>
          <input type="text" name="n_exp" class="form-control">
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
          <label for="fec_nac">Fecha de nacimiento</label>
          <input type="date" name="fec_nac" class="form-control">
        </div>
        <div class="form-group">
          <label for="curso">Curso</label>
          <input type="text" name="curso" class="form-control">
        </div>
        <div class="form-group">
          <label for="delegado">Delegado (0=Falso) (1=Verdadero)</label>
          <input type="bit" name="delegado" class="form-control">
        </div>
        <div class="form-group">
          <input type="submit" name="boton_update" class="btn btn-primary" value="Actualizar">
        </div>
      </form>
    </div>
  </div>
</div>


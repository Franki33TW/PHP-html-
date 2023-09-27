<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2 class="mt-4">Crea un alumno</h2>
      <hr>
      <form method="post" action="scripts/insert.php">
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
          <input type="boolean" name="delegado" class="form-control">
        </div>
        <div class="form-group">
          <input type="submit" name="boton_insert" class="btn btn-primary" value="Crear">
        </div>
      </form>
    </div>
  </div>
</div>

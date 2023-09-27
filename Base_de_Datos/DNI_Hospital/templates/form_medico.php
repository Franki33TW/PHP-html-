<div class="container">
  <div class="row">
    <div class="col-md-12">
        <h3 class="mt-4">Médicos</h3>
        <hr>
        <form method="post" action="scripts/dni_medico.php">
        <div class="form-group">
          <label for="id_medico">ID Médico</label>
          <input type="int" name="id_medico" class="form-control">
        </div>
        <div class="form-group">
          <label for="dni_medico">DNI Médico</label>
          <input type="text" name="dni_medico" class="form-control">
        </div>
        <div class="form-group">
          <input type="submit" name="boton_medico" class="btn btn-primary" value="Actualizar DNI">
        </div>
      </form>
    </div>
  </div>
</div>

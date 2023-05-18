<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2 class="mt-4">Crea una consulta</h2>
      <hr>
      <form method="post" action="../scripts/alta_consultas.php">
        <div class="form-group">
          <label for="id_paciente">ID Paciente</label>
          <input type="number" name="id_paciente" class="form-control">
        </div>
        <div class="form-group">
          <label for="id_medico">ID Médico</label>
          <input type="number" name="id_medico" class="form-control">
        </div>
        <div class="form-group">
          <input type="submit" name="insertar_consulta" class="btn btn-primary" value="Insertar consulta">
        </div>
      </form>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2 class="mt-4">Actualiza una consulta</h2>
      <hr>
      <form method="post" action="../scripts/update_consultas.php">
        <div class="form-group">
          <label for="id_consulta">Id</label>
          <input type="number" name="id_consulta" class="form-control">
        </div>
        <div class="form-group">
          <label for="id_paciente">ID Paciente</label>
          <input type="number" name="id_paciente" class="form-control">
        </div>
        <div class="form-group">
          <label for="id_medico">ID Médico</label>
          <input type="number" name="id_medico" class="form-control">
        </div>
        <div class="form-group">
          <input type="submit" name="actualizar_consulta" class="btn btn-primary" value="Actualizar consulta">
        </div>
      </form>
    </div>
  </div>
</div>

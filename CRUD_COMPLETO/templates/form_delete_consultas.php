<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2 class="mt-4">Borra una consulta</h2>
      <hr>
      <form method="post" action="../scripts/delete_consultas.php">
        <div class="form-group">
          <label for="id_paciente_medico">Id</label>
          <input type="text" name="id_paciente_medico" class="form-control">
        </div>
        <div class="form-group">
          <input type="submit" name="borrar_consulta" class="btn btn-primary" value="Borrar consulta">
        </div>
      </form>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2 class="mt-4">Actualiza un libro</h2>
      <hr>
      <form method="POST" action="../../scripts/libros/update_libro.php">
      <div class="form-group">
          <label for="id">Id</label>
          <input type="text" name="id" class="form-control">
        </div>
        <div class="form-group">
          <label for="titulo">Título</label>
          <input type="text" name="titulo" class="form-control">
        </div>
        <div class="form-group">
          <label for="tema">Tema</label>
          <input type="text" name="tema" class="form-control">
        </div>
        <div class="form-group">
          <label for="n_pag">Número de Páginas</label>
          <input type="text" name="n_pag" class="form-control">
        </div>
        <div class="form-group">
        <label for="prestado">Prestado</label>
          <select name="prestado" id="">
          <option value="NULL">Sin cambios</option>
          <option value="0">No Prestado</option>
            <option value="1">Prestado</option>
          </select>
        </div>
        <div class="form-group">
          <label for="fecha">Fecha última Reserva</label>
          <input type="date" name="fecha" class="form-control">
        </div>
        <div class="form-group">
          <input type="submit" name="actualizar_libro" class="btn btn-primary" value="Actualizar Libro">
        </div>
      </form>
    </div>
  </div>
</div>

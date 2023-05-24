<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2 class="mt-4">Alta de un libro</h2>
      <hr>
      <form method="POST" action="../../scripts/libros/alta_libro.php">
        <div class="form-group">
          <label for="titulo">Título</label>
          <input type="text" name="titulo" class="form-control">
        </div>
        <div class="form-group">
          <label for="tema">Tema</label>
          <input type="text" name="tema" class="form-control">
        </div>
        <div class="form-group">
          <label for="n_pag">Número de páginas</label>
          <input type="text" name="n_pag" class="form-control">
        </div>
        <div class="form-group">
        <label for="prestado">Prestado</label>
          <select name="prestado" id="">
            <option value="0">No Prestado</option>
            <option value="1">Prestado</option>
          </select>
        </div>
        <div class="form-group">
          <label for="fecha">Fecha última Reserva</label>
          <input type="date" name="fecha" class="form-control">
        </div>
        <div class="form-group">
          <input type="submit" name="insertar_libro" class="btn btn-primary" value="Insertar Libro">
        </div>
      </form>
    </div>
  </div>
</div>

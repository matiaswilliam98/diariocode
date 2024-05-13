<!DOCTYPE html>
<html lang="es-MX">
<?php require '../../includes/_db.php' ?>
<?php require '../../includes/_header.php' ?>



<body>

  <div class="container">
    <div class="col-sm-6 offset-3 mt-5">
      <form action="../../includes/_functions.php" method="POST" enctype="multipart/form-data">

        <div class="row">
          <div class="col-sm-6">
            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre *</label>
              <input type="text" id="nombre" name="nombre" class="form-control" required>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="mb-3">
              <label for="descripcion" class="form-label">Descripcion *</label>
              <input type="text" id="descripcion" name="descripcion" class="form-control" required>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12">
            <div class="mb-3">
              <label for="categorias" class="form-label">Categorias *</label>
              <select name="categorias" id="categorias" class="form-control" required>
                <option value="">Seleccione una opcion</option>
                <option value="Avisos diversos">Avisos diversos</option>
                <option value="Edictos Matrimoniales">Edictos Matrimoniales</option>
                <option value="Concesiones">Concesiones</option>
                <option value="Edictos Clasificados">Edictos Clasificados</option>
                <option value="Edictos judiciales">Edictos judiciales</option>
                <option value="Provincia">Provincia</option>
              </select>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <input type="file" class="form-control-file" name="foto" id="foto" required>
            </div>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-sm-6">
            <input type="hidden" name="accion" value="insertar_productos">
            <button type="submit" class="btn btn-success">Guardar</button>
          </div>
        </div>

      </form>
    </div>
  </div>

</body>
<?php require '../../../includes/_footer.php' ?>

</html>
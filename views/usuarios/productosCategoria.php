<!DOCTYPE html>
<html lang="en">
<?php require '../../includes/_db.php' ?>
<?php require '../../includes/_header.php' ?>

<body>

  <div id="content">
    <section>
      <div class="container mt-5">
        <div class="row">
          <div class="col-sm-12 mb-3">
            <h1 class="text-center">Publicaciones</h1>
            <div class="text-left">
              <a href="producto_agregar.php" class="btn btn-primary">Agregar publicación</a>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="table-responsive">
              <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">Descripción</th>
                    <th class="text-center">Categorías</th>
                    <th class="text-center">Imagen</th>
                    <th class="text-center">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $categoria = $_GET['categoria'];
                  extract($_POST);
                  $sql = "SELECT * FROM productos WHERE categorias = '$categoria'";
                  $productos = mysqli_query($conexion, $sql);
                  if ($productos->num_rows > 0) {
                    foreach ($productos as $key => $row) {
                      if ($row['cantidad'] <= $row['cantidad_min']) {
                        $color = '#F78E8E';
                        $clase = 'problema';
                      } else {
                        $clase = 'correcto';
                      }
                  ?>
                      <tr>
                        <td class="text-center"><?php echo $row['nombre']; ?></td>
                        <td class="text-center"><?php echo $row['descripcion']; ?></td>
                        <td class="text-center"><?php echo $row['categorias']; ?></td>
                        <td class="text-center"><img width="100" src="data:image;base64,<?php echo base64_encode($row['imagen']); ?>"></td>
                        <td class="text-center">
                          <a href="producto_editar.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Editar</a>
                          <a href="producto_eliminar.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a>
                        </td>
                      </tr>
                    <?php
                    }
                  } else {
                    ?>
                    <tr class="text-center">
                      <td colspan="5">No existen registros</td>
                    </tr>
                  <?php
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <section>
    <div class="container">
      <div class="row">
        <div class="col-lg-9">
        </div>
      </div>
    </div>
  </section>

  <?php require '../../includes/_footer.php' ?>
</body>

</html>
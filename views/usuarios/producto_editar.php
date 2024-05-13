<?php
$id = $_GET['id'];
require_once("../../includes/_db.php");
$consulta = "SELECT * FROM productos WHERE id = $id";
$resultado = mysqli_query($conexion, $consulta);
$productos = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html lang="en">
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
                            <input type="text" id="nombre" name="nombre" value="<?php echo $productos['nombre']; ?>" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripción *</label>
                            <input type="text" id="descripcion" name="descripcion" value="<?php echo $productos['descripcion']; ?>" class="form-control" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <label for="categorias" class="form-label">Categorías *</label>
                            <select name="categorias" id="categorias" class="form-control" required>
                                <option value="Avisos Diversos">Avisos Diversos</option>
                                <option value="Edictos Matrimoniales">Edictos Matrimoniales</option>
                                <option value="Concesiones">Concesiones</option>
                                <option value="Edictos Clasificados">Edictos Clasificados</option>
                                <option value="Edictos Judiciales">Edictos Judiciales</option>
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

                <div class="mb-3 text-center">
                    <input type="hidden" name="accion" value="editar_producto">
                    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            </form>
        </div>
    </div>

    <?php require '../../includes/_footer.php' ?>
</body>

</html>
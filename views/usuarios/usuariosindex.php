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
                        <center>
                            <h1>Información de sesión actual</h1>
                        </center>
                    </div>
                    <div class="col-sm-12">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Teléfono</th>
                                        <th>Correo</th>
                                        <th>Contraseña</th>
                                        <th>Registro</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT nombre, password, telefono, correo, registro FROM user WHERE correo = '$actualsesion'";
                                    $usuario = mysqli_query($conexion, $sql);
                                    if ($usuario->num_rows > 0) {
                                        $row = mysqli_fetch_assoc($usuario);
                                    ?>
                                        <tr>
                                            <td><?php echo $row['nombre']; ?></td>
                                            <td><?php echo $row['telefono']; ?></td>
                                            <td><?php echo $row['correo']; ?></td>
                                            <td><?php echo $row['password']; ?></td>
                                            <td><?php echo $row['registro']; ?></td>
                                        </tr>
                                    <?php
                                    } else {
                                    ?>
                                        <tr class="text-center">
                                            <td colspan="5">No existe registro para la sesión actual</td>
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
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?php require '../../includes/_footer.php' ?>
</body>

</html>

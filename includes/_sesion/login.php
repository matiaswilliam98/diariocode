<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="../../css/login.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    <img src="/img/logo_editora.png" alt="Logo" class="logo">
    <form action="validar.php" method="POST">
        <div id="login">
            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-md-12">
                            <form id="login-form" class="form" action="" method="post">
                                <h3 class="text-center">Login</h3>
                                <div class="form-group">
                                    <label for="username">Correo:</label><br>
                                    <input type="text" name="correo" id="correo" class="form-control" required placeholder="example@gmail.com">
                                </div>
                                <div class="form-group">
                                    <label for="password">Contraseña:</label><br>
                                    <input type="password" name="password" id="password" class="form-control" required placeholder="********">
                                </div>
                                <div class="form-group">
                                    <br>
                                    <input type="submit" class="btn btn-success btn-md space" value="Ingresar">
                                    <div id="register-link" class="text-right">
                                        <br>
                                        <a href="registros.php"><input type="button" class="btn btn-primary space" value="Registrarse"></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <footer>
        <img src="/img/logo_editora.png" alt="Logo de la empresa" style="width: 100px; height: auto;">
        <p style="color: black;">© 2023 Editora Perú. Todos los derechos reservados.</p>
    </footer>
</body>

</html>
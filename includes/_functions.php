<?php

require_once("_db.php");

if (isset($_POST['accion'])) {
    switch ($_POST['accion']) {
        case 'eliminar_producto':
            eliminar_producto();

            break;
        case 'editar_producto':
            editar_producto();

            break;

        case 'insertar_productos':
            insertar_productos();

            break;

        case 'insertar_usuario':
            insertar_usuario();
            break;
    
        case 'editar_usuario':
            editar_usuario();
            break;

        case 'eliminar_usuario':
            eliminar_usuario();
            break;
        
    }
}

function insertar_productos()
{

    global $conexion;
    extract($_POST);


    //variables donde se almacenan los valores de nuestra imagen
    $tamanoArchvio = $_FILES['foto']['size'];

    //se realiza la lectura de la imagen
    $imagenSubida = fopen($_FILES['foto']['tmp_name'], 'r');
    $binariosImagen = fread($imagenSubida, $tamanoArchvio);
    //se realiza la consulta correspondiente para guardar los datos

    $imagenFin = mysqli_escape_string($conexion, $binariosImagen);



    $consulta = "INSERT INTO productos (nombre, descripcion, categorias, imagen)
    VALUES ('$nombre', '$descripcion', '$categorias', '$imagenFin');";

    mysqli_query($conexion, $consulta);

    header("Location: ../views/usuarios/");
}

function editar_producto()
{

    global $conexion;
    extract($_POST);


    //variables donde se almacenan los valores de nuestra imagen
    $tamanoArchvio = $_FILES['foto']['size'];
    //se realiza la lectura de la imagen
    $imagenSubida = fopen($_FILES['foto']['tmp_name'], 'r');
    $binariosImagen = fread($imagenSubida, $tamanoArchvio);
    //se realiza la consulta correspondiente para guardar los datos

    $imagenFin = mysqli_escape_string($conexion, $binariosImagen);

    $consulta = "UPDATE productos SET nombre = '$nombre', descripcion = '$descripcion', categorias = '$categorias', imagen = '$imagenFin' WHERE id = $id";

    mysqli_query($conexion, $consulta);
    header("Location: ../views/usuarios/");
}

function eliminar_producto()
{

    global $conexion;
    extract($_POST);
    $id = $_POST['id'];
    $consulta = "DELETE FROM productos WHERE id = $id";
    mysqli_query($conexion, $consulta);
    header("Location: ../views/usuarios/");
}

function insertar_usuario()
{

    global $conexion;
    extract($_POST);

    $consulta = "INSERT INTO user (nombre, correo, password, telefono)
    VALUES ('$nombre', '$correo', '$password', '$telefono');";

    mysqli_query($conexion, $consulta);

    header("Location: ../views/usuarios/");
}

function editar_usuario()
{
    global $conexion;
    extract($_POST);
    
    // Obtener el ID del usuario a editar
    $id = $_POST['id'];

    $consulta = "UPDATE user SET nombre = '$nombre', correo = '$correo', password = '$password', telefono = '$telefono' WHERE id = $id";
    
    mysqli_query($conexion, $consulta);
    
    header("Location: ../views/usuarios/");
}

function eliminar_usuario()
{
    global $conexion;

    // Verifica si el ID está presente en $_POST
    if (isset($_POST['id'])) {
        $id = $_POST['id'];

        // Realiza la consulta SQL para eliminar el usuario
        $consulta = "DELETE FROM user WHERE id = $id";
        mysqli_query($conexion, $consulta);

        header("Location: ../views/usuarios/usuariosindex.php");
    } else {
        // Manejo de error si el ID no está presente
        echo "Error: ID no encontrado";
    }
}
<?php
require '../../includes/_db.php';
require '../../includes/_header.php';

// Verificar si se enviaron los datos de búsqueda
if (isset($_GET['nombre']) && isset($_GET['categoria'])) {
  $nombre = $_GET['nombre'];
  $categoria = $_GET['categoria'];

  // Consulta SQL con filtros de búsqueda
  $sql = "SELECT nombre, categorias, descripcion FROM productos WHERE nombre LIKE '%$nombre%' AND categorias LIKE '%$categoria%'";
  $productos = mysqli_query($conexion, $sql);

  // Mostrar resultados
  if ($productos->num_rows > 0) {
    echo "<h2>Resultados de la búsqueda:</h2>";
    echo "<table class='table table-striped table-hover'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Nombre</th>";
    echo "<th>Categoría</th>";
    echo "<th>Descripción</th>";
    echo "<th>Acciones</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    while ($row = mysqli_fetch_assoc($productos)) {
      echo "<tr>";
      echo "<td>".$row['nombre']."</td>";
      echo "<td>".$row['categorias']."</td>";
      echo "<td>".$row['descripcion']."</td>";
      echo "<td>";
      echo "<a href='./productos/formulario_editar.php?id=".$row['id']."' class='btn btn-success'>Editar</a>";
      echo "<a href='./productos/formulario_eliminar.php?id=".$row['id']."' class='btn btn-danger'>Eliminar</a>";
      echo "</td>";
      echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
  } else {
    echo "No se encontraron resultados.";
  }
} else {
  echo "No se enviaron los datos de búsqueda.";
}
?>

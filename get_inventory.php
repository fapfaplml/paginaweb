<?php
include "conexion.php";  // Incluir el archivo de conexión

// Consulta para obtener el inventario
$query = "SELECT * FROM inventario";
$resultado = $conexion->query($query);

// Mostrar resultados en la tabla HTML
while ($fila = $resultado->fetch_assoc()) {
    echo "<tr>";
    echo "<td>{$fila['id']}</td>";
    echo "<td>{$fila['nombre_producto']}</td>";
    echo "<td>{$fila['cantidad']}</td>";
    echo "<td><a href='incrementar.php?id={$fila["id"]}'>Entrada</a></td>";
    echo "<td><a href='decrementar.php?id={$fila["id"]}'>Salida</a></td>";
    echo "<td><a href='eliminar_producto.php?id={$fila["id"]}'>Baja</a></td>";
    // Agrega más columnas según tu base de datos
    echo "</tr>";
}

// Cerrar la conexión
$conexion->close();
?>

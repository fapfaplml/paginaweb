<?php
include "conexion.php";  // Incluir el archivo de conexión

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar datos del formulario
    $nombre = $_POST["nombre"];
    $cantidad = $_POST["cantidad"];

    // Insertar en la base de datos
    $sql = "INSERT INTO inventario (nombre_producto, cantidad) VALUES ('$nombre', $cantidad)";

    if ($conexion->query($sql) === TRUE) {
        echo "Producto insertado correctamente.";
        header("Location: index.php");
    } else {
        echo "Error al insertar el producto: " . $conexion->connect_error;
    }
}

// Cerrar la conexión
$conexion->close();
?>

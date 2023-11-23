<?php
include "conexion.php";  // Incluir el archivo de conexión

if (isset($_GET["id"]) && !empty($_GET["id"])) {
    $id_producto = $_GET["id"];

    // Agregar 1 al producto de la base de datos
    $sql = "UPDATE inventario SET cantidad = cantidad + 1 WHERE id = $id_producto";

    if ($conexion->query($sql) === TRUE) {
        echo "Cantidad decrementada correctamente.";
    } else {
        echo "Error al decrementar la cantidad: " . $conexion->connect_error;
    }
} else {
    echo "ID de producto no proporcionado para eliminar.";
}

// Redirigir a index.php después de la eliminación
header("Location: index.php");
// Cerrar la conexión
$conexion->close();
?>

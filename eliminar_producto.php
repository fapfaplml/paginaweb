<?php
include "conexion.php";  // Incluir el archivo de conexión

// Verificar si se proporciona un ID para eliminar
if (isset($_GET["id"]) && !empty($_GET["id"])) {
    $id_producto = $_GET["id"];

    // Eliminar el producto de la base de datos
    $sql = "DELETE FROM inventario WHERE id = $id_producto";

    if ($conexion->query($sql) === TRUE) {
        echo "Producto eliminado correctamente.";
    } else {
        echo "Error al eliminar el producto: " . $conexion->connect_error;
    }
} else {
    echo "ID de producto no proporcionado para eliminar.";
}

// Redirigir a index.php después de la eliminación
header("Location: index.php");
exit(); // Asegurar que el script se detenga después de la redirección
?>

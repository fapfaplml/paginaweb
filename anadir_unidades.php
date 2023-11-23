<?php
include "conexion.php";  // Incluir el archivo de conexión

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los datos del formulario
    $id_producto = $_POST["id_producto"];
    $cantidad_a_anadir = $_POST["cantidad"];

    // Consulta SQL para añadir la cantidad especificada
    $sql = "UPDATE inventario SET cantidad = cantidad + $cantidad_a_anadir WHERE id = $id_producto";

    if ($conexion->query($sql) === TRUE) {
        echo "Unidades añadidas correctamente.";
        header("Location: index.php");
    } else {
        echo "Error al añadir unidades: " . $conexion->connect_error;
    }
}

// Cerrar la conexión
$conexion->close();
?>

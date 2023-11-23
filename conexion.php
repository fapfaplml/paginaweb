<?php
// Establecer la conexión a la base de datos (asegúrate de tener la conexión configurada)
$conexion = new mysqli("127.0.0.1", "root", "", "gestion_inventario");


// Verificar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>

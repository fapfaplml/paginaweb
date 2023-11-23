<?php
include "conexion.php";  // Incluir el archivo de conexión

// Realizar una consulta
$sql = "SELECT * FROM tu_tabla";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexión MySQL a HTML</title>
</head>
<body>

    <h1>Datos de MySQL en HTML</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <!-- Agrega más columnas según tu tabla -->
        </tr>

        <?php
        // Mostrar los datos en la tabla
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["nombre"] . "</td>";
            // Agrega más columnas según tu tabla
            echo "</tr>";
        }
        ?>
    </table>

</body>
</html>

<?php
// Cerrar la conexión
$conn->close();
?>

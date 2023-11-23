<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interfaz de Inventario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<center><h1>Interfaz de Inventario</h1></center>
<h2>Insertar Nuevo Producto</h2>

<form action="insertar.php" method="post">
    <label for="nombre">Nombre del Producto:</label>
    <input type="text" id="nombre" name="nombre" required>

    <label for="cantidad">Cantidad:</label>
    <input type="number" id="cantidad" name="cantidad" required>

    <input type="submit" value="Insertar Producto">
</form>


    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre del Producto</th>
                <th>Cantidad</th>
                <th>Entrada</th>
                <th>Salida</th>
                <th>Dar de baja</th>
                <!-- Agrega más columnas según tu base de datos -->
            </tr>
        </thead>
        <tbody>
            <h2>Inventario</h2>
    <!--Un inventario tiene que tener registros de los productos que posee, asi como el control de entradas y salidas
    Por lo que, debemos tener pertenencia de datos, a lo que lo solucionaremos con SQL-->
            <?php include "get_inventory.php"; ?>

            <!-- Este archivo PHP se encargará de obtener los datos de la base de datos -->
        </tbody>
    </table>
    <h2>Añadir Unidades a un Producto</h2>

<form action="anadir_unidades.php" method="post">
    <label for="id_producto">ID del Producto:</label>
    <input type="number" id="id_producto" name="id_producto" required>

    <label for="cantidad">Cantidad a Añadir:</label>
    <input type="number" id="cantidad" name="cantidad" required>

    <input type="submit" value="Añadir Unidades">
</form>
<h2>Quitar Unidades a un Producto</h2>
<form action="quitar_unidades.php" method="post">
    <label for="id_producto">ID del Producto:</label>
    <input type="number" id="id_producto" name="id_producto" required>

    <label for="cantidad">Cantidad por Quitar:</label>
    <input type="number" id="cantidad" name="cantidad" required>

    <input type="submit" value="Quitar Unidades">
</form>
    

</body>
</html>
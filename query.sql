CREATE DATABASE IF NOT EXISTS gestion_inventario;

USE gestion_inventario;

CREATE TABLE IF NOT EXISTS inventario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre_producto VARCHAR(255) NOT NULL,
    cantidad INT NOT NULL
);

-- Insertar algunos datos de ejemplo
INSERT INTO inventario (nombre_producto, cantidad) VALUES
    ('Producto A', 10),
    ('Producto B', 20),
    ('Producto C', 15);

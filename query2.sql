CREATE DATABASE gestion_inventario;

USE gestion_inventario;

CREATE TABLE inventario (
    id INT PRIMARY KEY IDENTITY(1,1),
    nombre_producto VARCHAR(255) NOT NULL,
    cantidad INT NOT NULL
);

-- Insertar algunos datos de ejemplo
INSERT INTO inventario (nombre_producto, cantidad) VALUES
    ('Producto A', 10),
    ('Producto B', 20),
    ('Producto C', 15);

SELECT * FROM inventario;
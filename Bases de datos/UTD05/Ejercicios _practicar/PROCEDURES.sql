-- PROCEDURES

-- EJEMPLO SENCILLO PARA COMENZAR
-- Procedure que suma dos numeros y devuelve un resultado
DELIMITER $$
CREATE PROCEDURE sumar(IN num1 INT, IN num2 INT, OUT resultado INT)
BEGIN 
    SET resultado = num1 + num2;
END $$
DELIMITER ;

SET @res = 0;
CALL sumar(5, 7, @res);
SELECT @res;

-- PROCEDURE llamado aplicar_descuento que recibe precio inicial, porcentaje de descuento, y devuelva precio final
DELIMITER $$
CREATE PROCEDURE IF NOT EXISTS aplicar_descuento(p_id INT, p_descuento DECIMAL(10,2))
BEGIN
    DECLARE v_precio_inicial DECIMAL(10,2);
    DECLARE v_precio_final DECIMAL(10,2);

    -- Obtener el precio actual del producto
    SELECT precio
    INTO v_precio_inicial
    FROM productos_descuento
    WHERE id = p_id;

    -- Calcular el precio con descuento
    SET v_precio_final = v_precio_inicial - (v_precio_inicial * p_descuento / 100);

    -- Actualizar el precio en la tabla
    UPDATE productos_descuento
    SET precio = v_precio_final
    WHERE id = p_id;
END $$
DELIMITER ;







-- Esto es una base de datos co tablas para probar
CREATE DATABASE IF NOT EXISTS TIENDALIBROS;
USE TIENDALIBROS;

-- agregar datos a la base de datos
CREATE TABLE productos_descuento (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    precio DECIMAL(10,2) NOT NULL
);

INSERT INTO productos_descuento (nombre, precio) VALUES
('Teclado mecánico', 59.90),
('Ratón inalámbrico', 24.50),
('Monitor 24 pulgadas', 129.99),
('Auriculares gaming', 79.00),
('Alfombrilla XXL', 15.00);

CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL
);
INSERT INTO clientes (nombre, email) VALUES
('Juan Pérez', 'juan.perez@example.com'),
('María Gómez', 'maria.gomez@example.com'),
('Carlos Sánchez', 'carlos.sanchez@example.com'),
('Ana Martínez', 'ana.martinez@example.com');
CREATE TABLE ventas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_cliente INT,
    id_producto INT,
    fecha_venta DATE,
    precio_final DECIMAL(10,2),
    FOREIGN KEY (id_cliente) REFERENCES clientes(id),
    FOREIGN KEY (id_producto) REFERENCES productos_descuento(id)
);





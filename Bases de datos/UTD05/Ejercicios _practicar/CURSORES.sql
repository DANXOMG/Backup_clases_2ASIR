-- Cursores
-- Cursor sirve para recorrer filas de una en una

-- Este solo es un ejemplo sencillo para ver la estructura basica de un cursor

-- DECLARACION DE VARIABLES
DECLARE fin INT DEFAULT 0;
DECLARE v_campo1 INT;
DECLARE v_campo2 VARCHAR(100);

-- CURSOR PARA LA TABLA QUE SEA
DECLARE cur CURSOR FOR
    SELECT campo1, campo2 FROM tabla;

DECLARE CONTINUE HANDLER FOR NOT FOUND SET fin= 1;
OPEN cur;
loop_label: LOOP
    FETCH cur INTO v_campo1, v_campo2;

    IF fin = 1 THEN
        LEAVE loop_label;
    END IF;
END LOOP;
CLOSE cur;


-- EJEMPLO PARA RECORRER UNA TABLA DE PRODUCTOS Y MOSTRAR SUS NOMBRES
DELIMITER $$
CREATE PROCEDURE listar_productos()
BEGIN
    DECLARE fin INT DEFAULT 0;
    DECLARE v_titulo VARCHAR(200);

    -- Declarar cursor
    DECLARE cur_libros CURSOR FOR
        SELECT titulo FROM libros;

    -- Handler para detectar fin del cursor
    DECLARE CONTINUE HANDLER FOR NOT FOUND SET fin = 1;

    OPEN cur_libros;

    bucle: LOOP
        FETCH cur_libros INTO v_titulo;

        IF fin = 1 THEN
            LEAVE bucle;
        END IF;

        -- Mostrar cada título
        SELECT v_titulo AS titulo_libro;
    END LOOP;

    CLOSE cur_libros;
END;



-- PROCEDURE CON CURSOR
-- CONTAR LOS LIBROS DE CADA AUTOR
DELIMITER $$
CREATE PROCEDURE IF NOT EXISTS contar_libros_autor()
BEGIN
    DECLARE fin  INT DEFAULT 0;
    DECLARE v_id_autor INT;
    DECLARE v_nombre_autor VARCHAR(100);
    DECLARE v_total_libros INT;

-- CURSOR
DECLARE cur_autores CURSOR FOR
    SELECT id_autor, nombre FROM autores;

-- HANDLER PARA FINALIZAR EL CURSOR
DECLARE CONTINUE HANDLER FOR NOT FOUND SET fin = 1;
OPEN cur_autores;
bucle: LOOP
    FETCH cur_autores INTO v_id_autor, v_nombre_autor;
    IF (fin = 1) THEN
        LEAVE bucle;
    END IF;
    
    
    -- Salida
    SELECT COUNT (*) INTO v_total_libros FROM libros
    WHERE id_autor = v_id_autor;
    SELECT v_nombre_autor AS autor, v_total_libros AS total_libros;
END LOOP;
CLOSE cur_autores;
END $$
DELIMITER ;
CALL contar_libros_autor();


-- Ejemplo para contar los prestamos pendientes de cada cliente
-- Recorrer tabla de usuarios con cursor
-- cada usuario ver los prestamos (contar los prestamos)
-- devuelto = false
-- tabla prestamos, con nombre del cliente y numero de prestamos NO devueltos
-- 
DELIMITER $$
CREATE PROCEDURE prestamos_pendientes_cliente $$
BEGIN
    DECLARE fin INT DEFAULT 0;
    DECLARE v_nombre_cliente VARCHAR(100);
    DECLARE v_id_usuario INT;
    DECLARE v_total_libros_pendientes INT;

    -- CURSOR: recorre usuarios
    DECLARE cur_prestamos CURSOR FOR
        SELECT id_usuario, nombre FROM usuarios;
    
    -- HANDLER 
    DECLARE CONTINUE HANDLER FOR NOT FOUND SET fin = 1;
    OPEN cur_prestamos;
    bucle: LOOP
        FETCH cur_prestamos INTO id_usuario, v_nombre_cliente;
        IF (fin = 1) THEN
            LEAVE bucle;
        END IF;


        -- SALIDA

        -- Contar prestamos pendientes de devolver
        SELECT COUNT(*) INTO v_total_libros_pendientes FROM prestamos
        WHERE id_usuario = v_id_usuario AND devuelto = FALSE;

        -- Mostrar resultado
        select v_nombre_cliente AS usuario, v_total_libros_pendientes AS prestamos_pendientes;
        END LOOP;
    CLOSE cur_prestamos;
    END $$
DELIMITER $$;

CALL prestamos_pendientes_cliente();




CREATE PROCEDURE


    



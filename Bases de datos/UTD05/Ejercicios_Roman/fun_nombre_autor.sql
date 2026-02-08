# Función parametro id autor devuelve nombre autor

DELIMITER $$

CREATE FUNCTION fun_nombre_autor (p_id_autor INT)
RETURNS VARCHAR(100)
DETERMINISTIC
BEGIN
    DECLARE v_nombre VARCHAR(100);

    SELECT nombre 
    INTO v_nombre 
    FROM autores 
    WHERE id_autor = p_id_autor;

    RETURN v_nombre;
END $$

DELIMITER ;
SELECT fun_nombre_autor(1);
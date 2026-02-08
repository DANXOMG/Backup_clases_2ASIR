# Numero total de prestamos activos de un usuario
DROP FUNCTION IF EXISTS fun_prestamos_activos;
DELIMITER $$

CREATE FUNCTION fun_prestamos_activos(p_id_usuario INT)
RETURNS INT
DETERMINISTIC
BEGIN
    DECLARE v_total INT;

    SELECT COUNT(p.id_prestamo)
    INTO v_total
    FROM prestamos p
    INNER JOIN libros l
    ON p.id_libro = l.id_libro
    WHERE id_usuario = p_id_usuario
      AND devuelto = FALSE;

    RETURN v_total;
END $$

DELIMITER ;

SELECT fun_prestamos_activos(1);
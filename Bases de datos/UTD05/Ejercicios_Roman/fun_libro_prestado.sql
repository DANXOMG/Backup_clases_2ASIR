# Indicar si libro esta actualmente prestado
DROP FUNCTION IF EXISTS fun_libro_prestado;
DELIMITER $$

CREATE FUNCTION fun_libro_prestado (p_id_libro INT)
RETURNS BOOLEAN
DETERMINISTIC
BEGIN
    DECLARE v_prestado INT;

    SELECT COUNT(*)
    INTO v_prestado
    FROM prestamos
    WHERE id_libro = p_id_libro
      AND devuelto = FALSE;

    IF v_prestado > 0 THEN 
        RETURN 1;
    ELSE 
        RETURN 0;
    END IF;

END $$

DELIMITER ;
SELECT fun_libro_prestado(1);

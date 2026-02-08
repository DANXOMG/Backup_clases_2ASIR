# Calcular los dias de retraso de un prestamo
DROP FUNCTION IF EXISTS fun_retraso_prestamo;
DELIMITER $$

CREATE FUNCTION fun_retraso_prestamo(p_id_prestamo INT)
RETURNS INT
DETERMINISTIC
BEGIN
    DECLARE v_dias INT;
    DECLARE v_fecha_dev DATE;
    DECLARE v_fecha_pre DATE;

    SELECT fecha_devolucion, fecha_prestamo
    INTO v_fecha_dev, v_fecha_pre
    FROM prestamos
    WHERE id_prestamo = p_id_prestamo;
    
    IF v_fecha_dev IS NULL THEN
        SET v_dias = DATEDIFF(CURRENT_DATE, v_fecha_pre); -- CALCULO LOS DIAS DESDE EL PRESTAMO
    ELSE
        SET v_dias = DATEDIFF(v_fecha_dev, v_fecha_pre); -- CALCULA LOS DIAS DESDE 
    END IF;

    RETURN v_dias;
END $$

DELIMITER ;


SELECT fun_retraso_prestamo(3);

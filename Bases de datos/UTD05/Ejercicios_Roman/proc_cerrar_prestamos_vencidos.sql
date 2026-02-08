-- Recorrer los prestamos no devueltos y marcar como devueltos aquellos cuya fecha de devolución ya ha pasado
DELIMITER $$
DROP PROCEDURE IF EXISTS cerrar_prestamos_vencidos$$
CREATE PROCEDURE cerrar_prestamos_vencidos()
BEGIN
    DECLARE Fin INT DEFAULT 0;
    DECLARE v_id_prestamo INT;
    DECLARE v_fecha_devolucion DATE;
    -- DECLARE v_devuelto BOOLEAN;

    -- Cursor
    DECLARE cur_prestamos CURSOR FOR
        SELECT id_prestamo, fecha_devolucion FROM prestamos WHERE devuelto = FALSE AND fecha_devolucion IS NOT NULL;
    
    -- Handler para Fin del cursor
    DECLARE CONTINUE HANDLER FOR NOT FOUND SET Fin = 1;
    OPEN cur_prestamos;
        bucle: LOOP
            FETCH cur_prestamos INTO v_id_prestamo, v_fecha_devolucion;
            
            IF  Fin = 1 THEN
                LEAVE bucle;
            END IF;

            IF v_fecha_devolucion < CURRENT_DATE() THEN
                UPDATE prestamos
                SET devuelto = TRUE,
                    updated_by = 'admin',
                    updated_at = NOW()
                WHERE id_prestamo = v_id_prestamo;
            END IF;
        
        
        END LOOP;
    CLOSE cur_prestamos;
END $$

DELIMITER ;

CALL cerrar_prestamos_vencidos();
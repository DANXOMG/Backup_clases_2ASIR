DELIMITER $$
DROP PROCEDURE IF EXISTS lista_libros $$
CREATE PROCEDURE lista_libros()

BEGIN
	DECLARE fin INT DEFAULT 0;
	DECLARE v_titulo VARCHAR(200);
    
	-- CURSOR
    
	DECLARE cur_libros CURSOR FOR
		SELECT titulo FROM libros;
	-- Handler para finalizar cursor
	
    DECLARE CONTINUE HANDLER FOR NOT FOUND SET fin = 1;
	OPEN cur_libros;
    bucle: LOOP
    	FETCH cur_libros INTO v_titulo;
        if (fin = 1) THEN
        	LEAVE bucle;
        END IF;
 	-- salida
    SELECT v_titulo AS titulo_libro;
    END LOOP;
    CLOSE cur_libros;
END $$
DELIMITER ;
    
--lo hicimos desde powershell.
call lista_libros();
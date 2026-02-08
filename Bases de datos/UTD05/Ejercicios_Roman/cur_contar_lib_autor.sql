DELIMITER $$
DROP PROCEDURE IF EXISTS contar_libros_autor $$
CREATE PROCEDURE contar_libros_autor()

BEGIN
	DECLARE fin INT DEFAULT 0;
    DECLARE v_id_autor INT;
    DECLARE v_nombre VARCHAR(100);
	DECLARE v_total INT;
    
	-- CURSOR
    
	DECLARE cur_autores CURSOR FOR
		SELECT id_autor, nombre FROM autores
        ;
	-- Handler para finalizar cursor
	
    DECLARE CONTINUE HANDLER FOR NOT FOUND SET fin = 1;
	OPEN cur_autores;
    bucle: LOOP
    	FETCH cur_autores INTO v_id_autor, v_nombre;
        if (fin = 1) THEN
        	LEAVE bucle;
        END IF;
 	-- salida
    SELECT COUNT(*) INTO v_total FROM libros
    WHERE id_autor = v_id_autor;
    
    SELECT v_nombre AS nombre, v_total AS total;
    END LOOP;
    CLOSE cur_autores;
END $$
DELIMITER ;

call contar_libros_autor();




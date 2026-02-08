-- Cursores2
-- Muestra este procedure el nombre de los libros que tiene cada autor
-- Crear procedure para listar libros en el que aparezca el nombre y el autor
DELIMITER $$
DROP PROCEDURE IF EXISTS listar_libros_autores $$
CREATE PROCEDURE listar_libros_autores()
BEGIN
    DECLARE fin INT DEFAULT 0;
    DECLARE v_nombre_libro VARCHAR(100);
    DECLARE v_id_autor INT;
    DECLARE v_total_libros INT;

    -- CURSOR
    DECLARE cur_autores_libros CURSOR FOR
        SELECT titulo, id_autor FROM libros;

    --HANDLER PARA EMPEZAR EL CURSOR
    DECLARE CONTINUE HANDLER FOR NOT FOUND SET fin = 1;
    OPEN cur_autores_libros;
    bucle: LOOP
        FETCH cur_autores_libros INTO v_nombre_libro, v_id_autor;
        IF (fin =1) THEN
            LEAVE bucle;
        END IF;

        -- SALIDA
        SELECT count(*) INTO v_total_libros FROM libros
        WHERE id_autor = v_id_autor;
        SELECT v_nombre_libro AS titulo, v_id_autor AS id_autor, v_total_libros AS total_libros;
        END LOOP;
    CLOSE cur_autores_libros;
END $$
DELIMITER ;

CALL listar_libros_autores();


-- CREAR PROCEDURE PARA MOSTRAR UN AUTOR CON SUS LIBROS
DELIMITER $$
DROP PROCEDURE IF EXISTS mostrarlibros_autor $$
CREATE PROCEDURE contar_libros_autor()
BEGIN
    DECLARE v_nombre_autor VARCHAR(100);
    DECLARE 

    

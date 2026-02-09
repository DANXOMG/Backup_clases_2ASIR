-- Funciones
-- funcion para obtener el nombre de la categoria
-- Debe recibir EL id_categoria
-- crear la funcion nombre categoria
-- Que busque en la tabla categorias
-- Obtenga el nombre de la categoria


DELIMITER $$
DROP FUNCTION IF EXISTS nombre_categoria $$

CREATE FUNCTION nombre_categoria(v_id_categoria INT) -- recibe un parametro que sera un INT
RETURNS VARCHAR(100) -- Siempre las funciones te devolveran un tipo de dato
DETERMINISTIC
BEGIN
    DECLARE v_nombre VARCHAR(100); -- SOLO NECESITAMOS EL NOMBRE DE LA CATEGORIA
    

    SELECT nombre INTO v_nombre -- ALMACENAMOS EL NOMBRE DE LA CATEGORIA EN LA VARIABLE v_nombre
    FROM categorias -- BUSCAMOS EN LA TABLA CATEGORIAS
    WHERE id_categoria = v_id_categoria; -- DONDE EL ID_CATEGORIA SEA IGUAL AL PARAMETRO QUE RECIBIMOS
    RETURN v_nombre; -- DEVOLVEMOS EL NOMBRE DE LA CATEGORIA
END $$
DELIMITER ;

SELECT nombre_categoria(1); -- Ejemplo para llamar a la funcion del nombre de la categoria

-- Funcion para calcular si un prestamo esta retrasado

-- Crear funcion fun_esta_retrasado
-- Recibe fecha_prestamo y fecha_devolucion
-- Si el libro no se ha devuelto (fecha_devolucion is null)
-- Si el libro si se ha devuelto devuelto = 1
-- calcular los dias entre fecha_prestamo y fecha_devolucion

DELIMITER $$

DROP FUNCTION IF EXISTS fun_libro_retrasado $$
create function fun_libro_retrasado(v_id_prestamo INT)
RETURNS INT
DETERMINISTIC
BEGIN
    DECLARE v_fecha_prestamo DATE;
    DECLARE v_fecha_devolucion DATE;
    DECLARE v_dias_retraso INT;

    SELECT fecha_prestamo, fecha_devolucion INTO v_fecha_prestamo, v_fecha_devolucion
    FROM prestamos
    WHERE id_prestamo = v_id_prestamo;

    IF v_fecha_devolucion IS NULL THEN -- mira si el libro no se ha devuelto por eso es null
        RETURN 1; -- Esto solo es para indicar que el libro no se ha devuelto
    ELSE -- Si el valor no es nulo es porque se ha devuelto
        -- Aqui indicamos 
       
    IF v_fecha_devolucion IS NULL THEN -- mira si el libro no se ha devuelto por eso es null
        -- Si el libro es null, lo que no se ha devuelto, entonces calculamos los días de retraso entre la fecha actual y la fecha de inicio
        SET v_dias_retraso = DATEDIFF(CURRENT_DATE, v_fecha_prestamo); -- Devuelve los días de retraso entre la fecha actual y la fecha de inicio
    ELSE
        -- Si el libro si se ha devuelto, entonces calculamos los días de retraso entre la fecha de devolución y la fecha de inicio
        SET v_dias_retraso = DATEDIFF(v_fecha_devolucion, v_fecha_prestamo); -- Devuelve los días de retraso entre la fecha de devolución y la fecha de inicio
    END IF;

END $$
DELIMITER ;

SELECT fun_nombre_categoria(1); -- Ejemplo para llamar a la funcion del nombre de la categoria



-- PROCEDURES 

-- Crear un procedimiento que liste los libros por autor
-- Crear procedure libros_autor
-- Recibe el id_autor

DELIMITER $$

DROP PROCEDURE IF EXISTS libros_autor $$

CREATE PROCEDURE libros_autor()
BEGIN
    DECLARE fin INT DEFAULT 0;
    DECLARE v_nombre_libro VARCHAR(200);
    DECLARE v_id_autor INT;
    DECLARE v_nombre_autor VARCHAR(100);
    DECLARE v_total_libros INT;

    -- CURSOR: ahora incluye el nombre del autor
    DECLARE cur_autores_libros CURSOR FOR
        SELECT l.titulo, a.id_autor, a.nombre
        FROM libros l
        JOIN autores a ON l.id_autor = a.id_autor;

    -- Handler para FIN del cursor
    DECLARE CONTINUE HANDLER FOR NOT FOUND SET fin = 1;

    OPEN cur_autores_libros;

    bucle: LOOP
        FETCH cur_autores_libros INTO v_nombre_libro, v_id_autor, v_nombre_autor;

        IF fin = 1 THEN
            LEAVE bucle;
        END IF;

        -- Contar cuántos libros tiene ese autor
        SELECT COUNT(*)
        INTO v_total_libros
        FROM libros
        WHERE id_autor = v_id_autor;

        -- Salida
        SELECT 
            v_nombre_libro AS titulo,
            v_nombre_autor AS autor,
            v_total_libros AS total_libros_autor;
    END LOOP;

    CLOSE cur_autores_libros;
END $$

DELIMITER ;


CALL libros_autor(); -- Ejemplo para llamar al procedimiento de libros por autor



-- Registrar nuevo prestamo 
-- Crear procedure registrar_prestamo
-- Recibe parametro p_id_libro, p_id_usuario
-- Inserta nuevo registra en prestamos

DELIMITER $$
DROP PROCEDURE IF EXISTS registrar_prestamo $$

CREATE PROCEDURE registrar_prestamo(p_id_libro INT, p_id_usuario INT)
BEGIN
    DECLARE v_fecha_prestamo DATE;
    DECLARE v_fecha_devolucion DATE;
    DECLARE v_id_prestamo INT;

    SET v_fecha_prestamo = CURRENT_DATE; -- La fecha de préstamo es la fecha actual
    SET v_fecha_devolucion = NULL;

    INSERT INTO prestamos (id_libro, id_usuario, fecha_prestamo, fecha_devolucion)
    VALUES (p_id_libro, p_id_usuario, v_fecha_prestamo, v_fecha_devolucion);

END $$
DELIMITER ;



-- TRIGGERS
-- TRIGGER QUE ACTUALIZA LA FECHA DE MODIFICACION
-- mantener el campo update_at actualizado


DELIMITER $$
DROP TRIGGER IF EXISTS actualizar_fecha_modificacion $$

CREATE TRIGGER actualizar_fecha_modificacion
BEFORE UPDATE ON libros
FOR EACH ROW 
BEGIN
    SET NEW.updated_at = NOW();
END $$
DELIMITER ;









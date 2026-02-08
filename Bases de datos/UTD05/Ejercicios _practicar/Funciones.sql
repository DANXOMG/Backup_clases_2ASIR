-- CREACION DE FUNCIONES EN SQL


-- Funcion para obtener el nombre del autor a partir de su id
DELIMITER $$

CREATE FUNCTION IF NOT EXISTS funcion_nombre_autor(p_id_autor INT) -- Creamos la funcion que nos devolvera NOMBRE DEL AUTOR(el id del autor necesitamos)
RETURNS VARCHAR(100) -- eL tipo de dato que nos devolverá (el nombre del autor que seran letras)
DETERMINISTIC

BEGIN -- Donde empezará la funcion
DECLARE v_nombre VARCHAR(100) -- La variable que guardara el nombre del autor que se busque
-- consulta sql dentro de la tabla
SELECT nombre -- selecionamos el nombre del autor (tabla autores)
INTO v_nombre -- lo metemos en la variable para que no se escape
FROM autores
WHERE id_autor = p_id_autor; -- aqui lo que hace es coger todos los autores y es igual al parametro que le pasamos

RETURN v_nombre
END $$
DELIMITER ;




-- Funcion que nos devuelva la nacionalidad del autor

DELIMITER $$
--funcion nacionalidad del autor
CREATE FUNCTION fun_nacionalidad_autor (p_id INT)
RETURNS VARCHAR(100)
DETERMINISTIC
BEGIN
    DECLARE v_nac VARCHAR(100);

    SELECT nacionalidad
    INTO v_nac
    FROM autores
    WHERE id_autor = p_id;

    RETURN v_nac;
END $$

DELIMITER ;



-- Funcion para calcular los dias de retraso de un prestamo
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



-- funcion FECHA NACIMIENTO AUTOR
DELIMITER $$
CREATE FUNCTION fun_fecha_nacimiento_autor (p_id INT)
RETURNS VARCHAR(100)
DETERMINISTIC
BEGIN
    DECLARE v_fecha_nacimiento VARCHAR(100);

    SELECT fecha_nacimiento
    INTO v_fecha_nacimiento
    FROM autores
    WHERE id_autor = p_id;

    RETURN v_fecha_nacimiento;
END $$
DELIMITER ;

SELECT fun_fecha_nacimiento_autor(1);




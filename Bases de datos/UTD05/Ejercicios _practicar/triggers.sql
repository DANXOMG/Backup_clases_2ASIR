-- Aqui vamos a aprender a hacer triggers
-- Estructura logica de un trigger

DELIMITER $$
CREATE TRIGGER nombre_trigger
momento evento ON libros -- MOMENTO: BEFORE/AFTER - EVENTO: INSERT  / UPDATE / DELETE
FOR EACH ROW
BEGIN
    -- aqui va el codigo que se ejecutara cada vez que se dispare el trigger
END $$

DELIMITER ;

-- TRIGGER QUE INSERTE UN LIBRO EN LA TABLA LIBROS Y RELLENE LOS CAMPOS 
-- Este trigger lo que hace es modificar los campos de created_by y created_at cada vez que se inserta un nuevo libro en la tabla libros.
-- Asignara el valor de created_by a 'system' y el valor de created_at a la fecha y hora actual.

-- BEFORE UPDATE (antes de insertar un nuevo registro)

DELIMITER $$
DROP TRIGGER IF EXISTS trigger_insertar_libro $$
CREATE TRIGGER trigger_insertar_libro
BEFORE INSERT ON libros
FOR EACH ROW
BEGIN
    SET NEW.created_at = NOW();
    SET NEW.created_by = 'system';
END $$
DELIMITER ;


-- TRIGGER para actualizar el campo de usuarios
-- REGISTRAR EL CAMBIO DE UN PRESTAMO CUANDO SE ACTUALIZA

-- AFTER UPDATE (despues de actualizar un registro)

DELIMITER $$
DROP TRIGGER IF EXISTS trg_prestamos_auditoria $$
CREATE TRIGGER trg_prestamos_auditoria
AFTER UPDATE ON prestamos
FOR EACH ROW
BEGIN
    INSERT INTO auditoria_prestamos (id_prestamos, fecha, accion, usuario)
    VALUES (OLD.id_prestamos, NOW(), 'Actualizacion de prestamo', 'admin');
END $$
DELIMITER ;


-- TRIGGER QUE ACTUALIZA EL GMAIL DE UN SUAUARIO AL AÑADIRESE EN LA TABLA USUARIOS

-- BEFORE INSERT (antes de insertar un nuevo registro)

DELIMITER $$
DROP TRIGGER IF EXISTS actualizar_correo_usuario $$
CREATE TRIGGER actualizar_correo_usuario
BEFORE INSERT ON usuarios
FOR EACH ROW
BEGIN
    -- Generar el correo electronico del nuevo usuario automacamente
    SET NEW.email = CONCAT(NEW.nombre, '.', '@gmail.com');
    -- Rellenar campos de auditoria
    SET NEW.created_at = NOW();
    SET NEW.created_by = 'system';    
END $$
DELIMITER ;



-- TRIGGER BEFORE DELETE (EVITA BORRAR ANTES DE BORRAR
-- EVITA BORRAR UN AUTOR SI TIENE LIBROS ASOCIADOS

DELIMITER $$

DROP TRIGGER IF EXISTS evitar_borrar_autor_con_libros $$

CREATE TRIGGER evitar_borrar_autor_con_libros
BEFORE DELETE ON autores
FOR EACH ROW
BEGIN
    IF EXISTS (SELECT 1 FROM libros WHERE id_autor = OLD.id_autor) THEN
        SIGNAL SQLSTATE '45000'
        SET MESSAGE_TEXT = 'No se puede borrar el autor porque tiene libros asociados';
    END IF;
END $$

DELIMITER ;


-- trigger que evita borrar un prestamo si no se ha devuelto el libro
DELIMITER $$
DROP TRIGGER IF EXISTS evitar_borrar_prestamo_no_devuelto $$
CREATE TRIGGER evitar_borrar_prestamo_no_devuelto
BEFORE DELETE on prestamos
FOR EACH ROW
BEGIN
    IF OLD.devuelto = FALSE THEN
        SIGNAL SQLSTATE '45000'
        SET MESSAGE_TEXT = 'No se puede borrar el prestamo porque el libro no ha sido devuelto';
    END IF;
END $$
DELIMITER ;









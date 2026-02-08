-- Eliminar BD si existe y crearla
DROP DATABASE IF EXISTS tol_libros;
CREATE DATABASE tol_libros CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE tol_libros;

-- =====================================================
-- TABLA AUTORES
-- =====================================================
CREATE TABLE autores (
    id_autor INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    nacionalidad VARCHAR(100),
    fecha_nacimiento DATE,
    created_at DATETIME,
    updated_at DATETIME,
    created_by VARCHAR(100),
    updated_by VARCHAR(100)
);

-- =====================================================
-- TABLA CATEGORIAS
-- =====================================================
CREATE TABLE categorias (
    id_categoria INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    descripcion VARCHAR(255),
    created_at DATETIME,
    updated_at DATETIME,
    created_by VARCHAR(100),
    updated_by VARCHAR(100)
);

-- =====================================================
-- TABLA EDITORIALES
-- =====================================================
CREATE TABLE editoriales (
    id_editorial INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(150) NOT NULL,
    pais VARCHAR(100),
    created_at DATETIME,
    updated_at DATETIME,
    created_by VARCHAR(100),
    updated_by VARCHAR(100)
);

-- =====================================================
-- TABLA LIBROS
-- =====================================================
CREATE TABLE libros (
    id_libro INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(200) NOT NULL,
    anio_publicacion INT,
    id_autor INT,
    id_categoria INT,
    id_editorial INT,
    created_at DATETIME,
    updated_at DATETIME,
    created_by VARCHAR(100),
    updated_by VARCHAR(100),
    FOREIGN KEY (id_autor) REFERENCES autores(id_autor),
    FOREIGN KEY (id_categoria) REFERENCES categorias(id_categoria),
    FOREIGN KEY (id_editorial) REFERENCES editoriales(id_editorial)
);

-- =====================================================
-- TABLA USUARIOS
-- =====================================================
CREATE TABLE usuarios (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    email VARCHAR(150),
    telefono VARCHAR(20),
    created_at DATETIME,
    updated_at DATETIME,
    created_by VARCHAR(100),
    updated_by VARCHAR(100)
);

-- =====================================================
-- TABLA PRESTAMOS
-- =====================================================
CREATE TABLE prestamos (
    id_prestamo INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT,
    id_libro INT,
    fecha_prestamo DATE,
    fecha_devolucion DATE,
    devuelto BOOLEAN DEFAULT FALSE,
    created_at DATETIME,
    updated_at DATETIME,
    created_by VARCHAR(100),
    updated_by VARCHAR(100),
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario),
    FOREIGN KEY (id_libro) REFERENCES libros(id_libro)
);

-- =====================================================
-- INSERTAR AUTORES
-- =====================================================
INSERT INTO autores (nombre, nacionalidad, fecha_nacimiento, created_at, updated_at, created_by, updated_by) VALUES
('Gabriel García Márquez', 'Colombiana', '1927-03-06', NOW(), NOW(), 'admin', 'admin'),
('J.K. Rowling', 'Británica', '1965-07-31', NOW(), NOW(), 'admin', 'admin'),
('George Orwell', 'Británica', '1903-06-25', NOW(), NOW(), 'admin', 'admin'),
('Miguel de Cervantes', 'Española', '1547-09-29', NOW(), NOW(), 'admin', 'admin'),
('J.R.R. Tolkien', 'Británica', '1892-01-03', NOW(), NOW(), 'admin', 'admin');

-- =====================================================
-- INSERTAR CATEGORÍAS
-- =====================================================
INSERT INTO categorias (nombre, descripcion, created_at, updated_at, created_by, updated_by) VALUES
('Novela', 'Obras narrativas extensas', NOW(), NOW(), 'admin', 'admin'),
('Fantasía', 'Historias ambientadas en mundos imaginarios', NOW(), NOW(), 'admin', 'admin'),
('Ciencia Ficción', 'Relatos tecnológicos y futuristas', NOW(), NOW(), 'admin', 'admin'),
('Clásico', 'Obras literarias históricas', NOW(), NOW(), 'admin', 'admin'),
('Distopía', 'Futuros autoritarios o decadentes', NOW(), NOW(), 'admin', 'admin');

-- =====================================================
-- INSERTAR EDITORIALES
-- =====================================================
INSERT INTO editoriales (nombre, pais, created_at, updated_at, created_by, updated_by) VALUES
('Penguin Random House', 'Estados Unidos', NOW(), NOW(), 'admin', 'admin'),
('HarperCollins', 'Estados Unidos', NOW(), NOW(), 'admin', 'admin'),
('Planeta', 'España', NOW(), NOW(), 'admin', 'admin'),
('Anagrama', 'España', NOW(), NOW(), 'admin', 'admin'),
('Bloomsbury Publishing', 'Reino Unido', NOW(), NOW(), 'admin', 'admin');

-- =====================================================
-- INSERTAR LIBROS
-- =====================================================
INSERT INTO libros (titulo, anio_publicacion, id_autor, id_categoria, id_editorial, created_at, updated_at, created_by, updated_by) VALUES
('Cien años de soledad', 1967, 1, 1, 3, NOW(), NOW(), 'admin', 'admin'),
('El amor en los tiempos del cólera', 1985, 1, 1, 3, NOW(), NOW(), 'admin', 'admin'),

('Harry Potter y la piedra filosofal', 1997, 2, 2, 5, NOW(), NOW(), 'admin', 'admin'),
('Harry Potter y la cámara secreta', 1998, 2, 2, 5, NOW(), NOW(), 'admin', 'admin'),

('1984', 1949, 3, 5, 1, NOW(), NOW(), 'admin', 'admin'),
('Rebelión en la granja', 1945, 3, 3, 1, NOW(), NOW(), 'admin', 'admin'),

('Don Quijote de la Mancha', 1605, 4, 4, 4, NOW(), NOW(), 'admin', 'admin'),

('El Señor de los Anillos: La Comunidad del Anillo', 1954, 5, 2, 2, NOW(), NOW(), 'admin', 'admin'),
('El Hobbit', 1937, 5, 2, 2, NOW(), NOW(), 'admin', 'admin');

-- =====================================================
-- INSERTAR USUARIOS
-- =====================================================
INSERT INTO usuarios (nombre, email, telefono, created_at, updated_at, created_by, updated_by) VALUES
('Ana López', 'ana.lopez@example.com', '612345678', NOW(), NOW(), 'admin', 'admin'),
('Carlos Martín', 'cmartin@example.com', '678901234', NOW(), NOW(), 'admin', 'admin'),
('Lucía Fernández', 'luciaf@example.com', '645678912', NOW(), NOW(), 'admin', 'admin'),
('Miguel Torres', 'mtorres@example.com', '699123456', NOW(), NOW(), 'admin', 'admin'),
('Elena García', 'egarcia@example.com', '688112233', NOW(), NOW(), 'admin', 'admin');

-- =====================================================
-- INSERTAR PRÉSTAMOS
-- =====================================================
INSERT INTO prestamos (id_usuario, id_libro, fecha_prestamo, fecha_devolucion, devuelto, created_at, updated_at, created_by, updated_by) VALUES
(1, 1, '2025-01-10', '2025-01-20', TRUE, NOW(), NOW(), 'admin', 'admin'),
(1, 3, '2025-02-01', NULL, FALSE, NOW(), NOW(), 'admin', 'admin'),
(2, 2, '2025-01-15', '2025-01-30', TRUE, NOW(), NOW(), 'admin', 'admin'),
(2, 5, '2025-02-10', NULL, FALSE, NOW(), NOW(), 'admin', 'admin'),
(3, 4, '2025-01-05', '2025-01-18', TRUE, NOW(), NOW(), 'admin', 'admin'),
(3, 9, '2025-02-11', NULL, FALSE, NOW(), NOW(), 'admin', 'admin'),
(4, 6, '2025-01-20', '2025-02-01', TRUE, NOW(), NOW(), 'admin', 'admin'),
(4, 7, '2025-02-08', NULL, FALSE, NOW(), NOW(), 'admin', 'admin'),
(5, 8, '2025-01-12', '2025-01-25', TRUE, NOW(), NOW(), 'admin', 'admin'),
(5, 3, '2025-02-14', NULL, FALSE, NOW(), NOW(), 'admin', 'admin');
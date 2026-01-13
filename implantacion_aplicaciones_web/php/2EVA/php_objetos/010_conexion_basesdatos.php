<?php

$cadena_conexion = 'mysql:dbname=tol_libros;host=127.0.0.1';
$usuario = 'root';
$clave = '';

try {
    $db = new PDO($cadena_conexion, $usuario, $clave);
    echo "Conexión establecida correctamente.";
    // Consulta a base de datos
    $ssql = "SELECT * FROM autores"; // Consulta SQL
    $autores = $db->query($ssql);
    echo "<p>Número de registro de autores: " . $autores->rowCount() . "</p>";


} catch (PDOException $e) {
    echo 'Error al conectar con la base de datos: ' . $e->getMessage();
}

// Recorrer los registros
$tabla = "<table border='1'>";
$tabla = $tabla . "</table>";




foreach ($autores as $row) {
    $tabla = $tabla . "<tr>";
    $tabla = $tabla . "<td>" . $row['nombre'] . "</td>";
    $tabla = $tabla . "</tr>" . $row['nacionalidad'] . "</td>";
    $tabla = $tabla . "</tr>". $row['fecha_nacimiento'] . "</td>";
    $tabla = $tabla . "</tr>";
    }
    $tabla = $tabla . "</table>";




    echo "<hr><hr><hr>";

    

    print("<p><b>Nombre: </b>" . $row['nombre']). "</p>";





?>
<?php


// Cadena de conexión
$cadena_conexion = 'mysql:dbname=tol_libros;host=127.0.0.1';
$usuario = "root";
$clave = "";

try {
    $db = new PDO($cadena_conexion, $usuario, $clave);
    echo '<p>Conexión con la base de datos realizada con éxito</p>';

    $preparada = $db->prepare('SELECT nombre, nacionalidad,fecha_nacimiento FROM autores WHERE nacionalidad=:nacionalidad');
    


    // Ejecutar query usando método execute
    $preparada->execute(array(':nacionalidad'=>'Britanica'));
    echo "<p>Número de Autores: " . $preparada->rowCount() . "</p>";

    // Recorrer la variable usuarios
    echo "<p>Recorrido de usuario con rol=2</p>";
    foreach ($preparada as $row) {
        print "<b>nombre: </b>" . $row['nombre'] . " ";
        print "<b>clave: </b>" . $row['clave'] . "<br>";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>

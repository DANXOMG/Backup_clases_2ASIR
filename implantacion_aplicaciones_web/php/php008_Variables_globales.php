<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Varibles Globales</title>
</head>
<body>
    <h1>Variables Globales</h1>
    
    <?php
    // Declaracion de variables globales

    echo "<p> Ruta dentro de htdocs = ". $_SERVER["PHP_SELF"] ."</p>";
    echo "<p> Nombre del servidor = ". $_SERVER["SERVER_NAME"] ."</p>";
    echo "<p> Software del servidor = ". $_SERVER["SERVER_SOFTWARE"] ."</p>";
    echo "<p> Protocolo = ". $_SERVER["SERVER_PROTOCOL"] ."</p>";
    echo "<p> Metodo de la peticion = ". $_SERVER["REQUEST_METHOD"] ."</p>";
    
    
    ?>




</body>
</html>
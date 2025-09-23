<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constantes</title>
</head>
<body>
    <h1>Definicion de constantes</h1>

    <?php

    /* declaracion de constantes */

    define("PI", 3.1415);
    define("LIMITE",1000);
    define("MI_CADENA", "Esta es una constante de tipo cadena");
    define("FALSO", 0);
    
    // Mostramos la informacion de las constantes

    echo "<p>". PI ."</p>";
    echo "<p>". LIMITE ."</p>";
    echo "<p>". MI_CADENA ."</p>";
    echo "<p>". FALSO ."</p>";

    // Integer constantes

    echo "<p> PHP_INT_SIZE = ". PHP_INT_SIZE ."</p>";
    echo "<p> PHP_INT_MAX = ". PHP_INT_MAX ."</p>";
    echo "<p> PHP_INT_MIN = ". PHP_INT_MIN ."</p>";
    




    ?>
    
</body>
</html>
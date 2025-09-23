<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable inicializada</title>
</head>
<body>
    <h2>Variables no inicializadas</h2>
    
    <?php

    /* Declaración de variables */

    $var1 = 100;
    $var3 = 100 + $var2; //$var2 no esta definida

    echo "$var3". "<br>";

    $var3 = 100 * $var2;
    echo "$var3". "<br>";



    ?>





</body>
</html>
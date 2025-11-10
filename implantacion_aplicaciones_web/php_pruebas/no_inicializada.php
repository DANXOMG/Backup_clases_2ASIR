<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable no inicializada</title>
</head>
<body>
    

    <?php
    // Declaración de variables
    $variable1 = 10;
    $variable2 = 20;
    $variable3 = 25;

    $varriable5 = $variable4 + 100; //variable4 no esta definida aun (nos dará un warning)

    echo "$variable5" . "<br>"; // Aquí no saldrá nada en pantalla porque la variable5 = null

    $variable5 = 100 + $variable4; // Definimos la variable5 que será (variable2 = 20 * 100)

    echo "$variable5". "<br>"; // La variable5 ahora será (100 + 0) = 100

    // El resultado de la variable5 al principio será 100 (0 + 100) y luego 2000 (20 * 100)
    // Esto sucede porque al inicio la variable5 ni la variable4 estan inicializadas, por eso tratará a variable4 comno null (null = 0)

    ?>



</body>
</html>
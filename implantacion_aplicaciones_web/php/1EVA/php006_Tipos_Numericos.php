<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Numericos</title>
</head>
<body>
    <h1>Tipos numericos</h1>

    <?php

    // Declaracion de variables

    $a = 0b100; //número en binario
    $b = 0b001;
    $c = $a + $b;

    echo "<p> La suma es = ". $c ."</p>";

    $d = 5/2;

    echo "<p> La division es = ". $d ."</p>";

    $e = 7.5;

    $f = (int)$e; //cambiamos el numero flotante a entero
    
    echo "<p> El numero entero es = ". $f ."</p>";

    $g = 7e2;

    echo "<p> La variable g es = ". $g ."</p>";

    $h = 7E2;

    echo "<p> La variable g es = ". $h ."</p>";
    
    ?>



    
</body>
</html>
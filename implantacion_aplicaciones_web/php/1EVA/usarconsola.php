<?php
    //solicitar la base del triangulo
    echo "ingrese la base del triangulo: ";
    $base = floatval(trim(fgetc(STDIN)));

    //solicitar la altura del triangulo
    echo "Ingrese la altura del triangulo";
    $altura = floatval(trim(fgetc(STDIN)));

    $area = $base * $altura / 2;

    echo "El area del triangulo es: $area";
?>
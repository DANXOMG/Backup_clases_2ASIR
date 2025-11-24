<?php

// Matriz cuadrada NxN
// SM = M + A + B + C + D
// m = Suma de todos los numeros del marco de la matriz
// valor A = Suma de todos los números pares menores que 25 del cuadrante C1.
// Definimos el valor B = Suma de todos los números impares mayores que 50 del cuadrante C2.
// Definimos el valor C = Suma de todos los números múltiplos de tres del cuadrante C3.
// Definimos el valor D = Suma de todos los números múltiplos de cuatro y mayores que 60 del cuadrante C4.

$matriz = [

];
$fila = 6;
$columna = 6;

// Funcion para rellenar matriz de numeros aleatorios
function rellenarmatriz($fila, $columna, $matriz){
    for ($i = 0; $i < $fila; $i++){
        for ($j = 0; $j < $columna; $j++){
            $matriz[$i][$j] = rand(1, 99);
        }
    }
}

function mostrarmatriz($fila, $columna, $matriz){
    for ($i = 0; $i < $fila; $i++){
        for ($j = 0; $j < $columna; $j++){
            echo $matriz[$i][$j] . " ";
        }
        echo "<br>";
    }

}


function calcularSM($matriz) {
    $n = count($matriz);
    $m = 0;
    $A = 0;
    $B = 0;
    $C = 0;
    $D = 0;

    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            // Suma del marco
            if ($i == 0 || $i == $n - 1 || $j == 0 || $j == $n - 1) {
                $m += $matriz[$i][$j];
            }

            // Cuadrante C1
            if ($i < $n / 2 && $j < $n / 2) {
                if ($matriz[$i][$j] < 25 && $matriz[$i][$j] % 2 == 0) {
                    $A += $matriz[$i][$j];
                }
            }

            // Cuadrante C2
            if ($i < $n / 2 && $j >= $n / 2) {
                if ($matriz[$i][$j] > 50 && $matriz[$i][$j] % 2 != 0) {
                    $B += $matriz[$i][$j];
                }
            }

            // Cuadrante C3
            if ($i >= $n / 2 && $j < $n / 2) {
                if ($matriz[$i][$j] % 3 == 0) {
                    $C += $matriz[$i][$j];
                }
            }

            // Cuadrante C4
            if ($i >= $n / 2 && $j >= $n / 2) {
                if ($matriz[$i][$j] > 60 && $matriz[$i][$j] % 4 == 0) {
                    $D += $matriz[$i][$j];
                }
            }
        }
    }

    $SM = $m + $A + $B + $C + $D;
    return $SM;
}





rellenarmatriz($fila, $columna, $matriz);
mostrarmatriz($fila, $columna, $matriz);
$SM = calcularSM($matriz);



?>
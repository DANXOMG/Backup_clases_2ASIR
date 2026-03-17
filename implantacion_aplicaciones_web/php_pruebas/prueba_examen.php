<?php

$matrizA = [
    [0, 0 ,0],
    [1, 1, 1],
    [2, 2 ,2]
];

$matrizB = [
    [1, 1, 1],
    [2, 2, 2],
    [3, 3, 3]
];

$resultado = [] ;
$filas = count($matrizA);
$columas = count($matrizA[0]);

function rellenarmatriz($matriz, $filas, $columnas){
    for ($i=0; $i < $filas; $i++) {
        for ($j=0; $j < $columnas; $j++) { 
            $matriz[$i][$j] = "*";
        } 
        
    } return $matriz;
}

function mostrarmatriz($matriz){
    echo "<table bordercolor='red' cellpadding='6' style='border-collapse: collapse; text-align: center; justify-self:center; display:flex'>>";
    foreach ($matriz as $fila){
        echo "<tr>";
        foreach ($fila as $valor){
            echo "<td>" . $valor. "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}


$resultado = rellenarmatriz($resultado, $filas, $columnas, $matrizA, $matrizB);
mostrarmatriz($resultado);







?>
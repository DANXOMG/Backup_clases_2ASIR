<?php
$matriz1 = [
    [1, 1, 1],
    [2, 2, 2],
    [3, 3, 3]
];
$matriz2 = [
    [3, 3, 3],
    [2, 2, 2],
    [1, 1, 1]    
];

$resultado = [];
$filas = count($matriz1);
$columnas = count($matriz1[0]);


function sumarMatrices($matriz, $fil, $col, $m1, $m2){
    for ($i=0; $i < $fil; $i++) {
        for ($j=0; $j < $col; $j++) {
            $matriz[$i][$j] = $m1[$i][$j] + $m2[$i][$j];
        } 
        
    } 
    return $matriz;
}

function mostrarMatriz($matriz) {
    echo "<table bordercolor='red' cellpadding='6' style='border-collapse: collapse; text-align: center; justify-self:center; display:flex'>";
    foreach ($matriz as $fila) {
        echo "<tr>";
        foreach ($fila as $valor) {
            echo "<td>$valor</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}




$resultado = sumarMatrices($resultado, $filas, $columnas, $matriz1, $matriz2);
mostrarMatriz($resultado);




?>
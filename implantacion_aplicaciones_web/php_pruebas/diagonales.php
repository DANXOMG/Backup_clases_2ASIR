<?php

$matriz = [
    [0, 0, 0],
    [0, 0, 0],
    [0, 0 ,0]
];
$fil = 3;
$col = 3;

function diagonales($fil, $col, $ma){
    for ($i=0; $i < $fil; $i++) {
        $ma[$i][$col -1 -$i] = "*"; 
    }
    return $ma;

}

function mostrarMatriz($fil, $col, $ma){
    echo "<table>";
    foreach ($ma as $fil) {
        echo "<tr>";
        foreach ($fil as $valor){
            echo "<td> $valor </td>";
        }
        echo "</tr>";
       
    }
    echo "</table>";
    
}


$matriz = diagonales($fil, $col, $matriz);
mostrarMatriz($fil, $col, $matriz);

?>
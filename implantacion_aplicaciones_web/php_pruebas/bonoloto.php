<?php

$boleto = [
    
];
$extra = [
    
];


function numerosaleatoriosboleto($ma){
    for ($i=0; $i < 5; $i++) {
        for ($j=0; $j < 2; $j++) { 
            $ma[$i][$j] = rand(1, 9);
        }
    }
}

function mostrarboleto($fil, $col, $ma){
    echo "<table>";
    foreach ($ma as $fil){
        echo "<tr>";
        foreach ($fil as $valor){
            echo "<td> $valor </td>";
        }
   }
   echo "</table>";
}

$boleto = numerosaleatoriosboleto($boleto);
mostrarboleto($boleto);










?>
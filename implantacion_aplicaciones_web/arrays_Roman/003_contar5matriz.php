<?php
// Función que crea una matriz vacía de 9x9
function crearMatriz($filas = 9, $columnas = 9) {
    $matriz = array();
    for ($i = 0; $i < $filas; $i++) {
        $matriz[$i] = array_fill(0, $columnas, 0);
        
    }
    return $matriz;
}

// Función que rellena la matriz con números aleatorios entre 1 y 9
function rellenarMatriz($matriz) {
    for ($i = 0; $i < count($matriz); $i++) {
        for ($j = 0; $j < count($matriz[$i]); $j++) {
            $matriz[$i][$j] = rand(1, 9);
        }
    }
    return $matriz;
}

// Función que cuenta cuántos 5 hay en la matriz
function contarCincos($matriz) {
    $contador = 0;
    foreach ($matriz as $fila) {
        foreach ($fila as $valor) {
            if ($valor == 5) {
                $contador++;
            }
        }
    }
    return $contador;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contar5</title>
</head>
<body>

<?php

// --- Programa principal ---

$matriz = crearMatriz();           // Crea matriz vacía
$matriz = rellenarMatriz($matriz); // Rellena con números aleatorios
$cincos = contarCincos($matriz);   // Cuenta los 5

// Mostrar la matriz
echo "<h3>Matriz generada:</h3>";
echo "<table border='1' cellpadding='5' style='border-collapse: collapse; text-align:center;'>";
foreach ($matriz as $fila) {
    echo "<tr>";
    foreach ($fila as $valor) {
        echo "<td>$valor</td>";
    }
    echo "</tr>";
}
echo "</table>";

// Mostrar resultado
echo "<p><strong>Número de 5 encontrados: $cincos</strong></p>";


?>
    
</body>
</html>

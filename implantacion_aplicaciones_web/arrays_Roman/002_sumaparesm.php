<?php
// Función que crea una matriz vacía de dimension x dimension
function crearMatriz($dimension) {
    $matriz = array();
    for ($i = 0; $i < $dimension; $i++) {
        $matriz[$i] = array_fill(0, $dimension, 0);
    }
    return $matriz;
}

// Función que rellena la matriz con números aleatorios entre 1 y 5
function rellenarMatriz($matriz) {
    for ($i = 0; $i < count($matriz); $i++) {
        for ($j = 0; $j < count($matriz[$i]); $j++) {
            $matriz[$i][$j] = rand(1, 3);
        }
    }
    return $matriz;
}

// Función que suma los elementos de las filas pares (0, 2, 4, ...)
function sumarFilasPares($matriz) {
    $suma = 0;
    for ($i = 0; $i < count($matriz); $i++) {
        if ($i % 2 == 0) { // fila par
            for ($j = 0; $j < count($matriz[$i]); $j++) {
                $suma += $matriz[$i][$j];
            }
        }
    }
    return $suma;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sumapares</title>
</head>
<body>

<?php 

// --- Programa principal ---

$dimension = 7; // Puedes cambiar este valor o hacerlo venir de un formulario
$matriz = crearMatriz($dimension);
$matriz = rellenarMatriz($matriz);
$sumaPares = sumarFilasPares($matriz);

// Mostrar la matriz en tabla HTML
echo "<h3>Matriz de $dimension x $dimension:</h3>";
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
echo "<p><strong>Suma de los elementos de las filas pares: $sumaPares</strong></p>";

?>
    
</body>
</html>
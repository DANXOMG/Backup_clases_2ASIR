<?php
// --- 1. Pedimos al usuario el número escalar ---
echo "Introduce el número por el que quieres multiplicar la matriz: ";
$k = (float) trim(fgets(STDIN));

// --- 2. Pedimos el tamaño de la matriz ---
echo "Introduce el número de filas: ";
$filas = (int) trim(fgets(STDIN));

echo "Introduce el número de columnas: ";
$columnas = (int) trim(fgets(STDIN));

// --- 3. Pedimos los valores de la matriz ---
$matriz = [];
for ($i = 0; $i < $filas; $i++) {
    for ($j = 0; $j < $columnas; $j++) {
        echo "Introduce el valor de la posición [$i][$j]: ";
        $matriz[$i][$j] = (float) trim(fgets(STDIN));
    }
}

// --- 4. Multiplicamos cada elemento por el escalar ---
$resultado = [];
for ($i = 0; $i < $filas; $i++) {
    for ($j = 0; $j < $columnas; $j++) {
        $resultado[$i][$j] = $k * $matriz[$i][$j];
    }
}

// --- 5. Mostramos la matriz resultante ---
echo "\nMatriz resultante:\n";
foreach ($resultado as $fila) {
    echo implode("\t", $fila) . "\n";
}
?>

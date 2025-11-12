<?php
// --- FUNCIONES ---

// 1️⃣ Crear y rellenar una matriz 7x7 con números aleatorios entre 1 y 9
function crearYrellenarMatriz($dimension = 7) {
    $matriz = array();
    for ($i = 0; $i < $dimension; $i++) {
        for ($j = 0; $j < $dimension; $j++) {
            $matriz[$i][$j] = rand(1, 9); // Cambia rango si quieres otros valores
        }
    }
    return $matriz;
}

// 2️⃣ Mostrar la matriz como una tabla HTML
function mostrarMatriz($matriz) {
    echo "<table border='1' cellpadding='6' style='border-collapse: collapse; text-align: center;'>";
    foreach ($matriz as $fila) {
        echo "<tr>";
        foreach ($fila as $valor) {
            echo "<td>$valor</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

// 3️⃣ Obtener los tres números que más se repiten en la matriz
function obtenerTresMasRepetidos($matriz) {
    $frecuencias = array();

    // Contar todas las ocurrencias
    foreach ($matriz as $fila) {
        foreach ($fila as $valor) {
            if (!isset($frecuencias[$valor])) {
                $frecuencias[$valor] = 1;
            } else {
                $frecuencias[$valor]++;
            }
        }
    }

    // Ordenar las frecuencias de mayor a menor
    arsort($frecuencias);

    // Tomar los tres primeros elementos
    $topTres = array_slice($frecuencias, 0, 3, true);

    return $topTres;
}

// --- PROGRAMA PRINCIPAL ---

$matriz = crearYrellenarMatriz(7);
$topTres = obtenerTresMasRepetidos($matriz);

// Mostrar resultados
echo "<h3>Matriz 7x7 generada:</h3>";
mostrarMatriz($matriz);

echo "<h3>Los tres números que más se repiten:</h3>";
echo "<ul>";
foreach ($topTres as $numero => $cantidad) {
    echo "<li>Número <strong>$numero</strong> → $cantidad repeticione(s)</li>";
}
echo "</ul>";
?>

<?php
// Función que crea y rellena una matriz de dimension x dimension con números aleatorios entre 1 y 5
function crearYrellenarMatriz($dimension) {
    $matriz = array();
    for ($i = 0; $i < $dimension; $i++) {
        for ($j = 0; $j < $dimension; $j++) {
            $matriz[$i][$j] = rand(1, 100);
        }
    }
    return $matriz;
}

// Función que obtiene el número mayor, el menor y cuántas veces se repiten
function obtenerMayorMenorYRepeticiones($matriz) {
    $todos = array();
    foreach ($matriz as $fila) {
        foreach ($fila as $valor) {
            $todos[] = $valor;
        }
    }

    $mayor = max($todos);
    $menor = min($todos);

    $repeticionesMayor = 0;
    $repeticionesMenor = 0;

    foreach ($todos as $valor) {
        if ($valor == $mayor) $repeticionesMayor++;
        if ($valor == $menor) $repeticionesMenor++;
    }

    return array(
        'mayor' => $mayor,
        'repeticionesMayor' => $repeticionesMayor,
        'menor' => $menor,
        'repeticionesMenor' => $repeticionesMenor
    );
}

// Función que muestra la matriz en pantalla como una tabla HTML
function mostrarMatriz($matriz) {
    echo "<table border='1' cellpadding='5' style='border-collapse: collapse; text-align:center;'>";
    foreach ($matriz as $fila) {
        echo "<tr>";
        foreach ($fila as $valor) {
            echo "<td>$valor</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

// --- Programa principal ---

$dimension = 10; // Puedes cambiar este valor o hacerlo venir de un formulario
$matriz = crearYrellenarMatriz($dimension);
$resultado = obtenerMayorMenorYRepeticiones($matriz);

// Mostrar resultados
echo "<h3>Matriz de $dimension x $dimension:</h3>";
mostrarMatriz($matriz);

echo "<p><strong>Número mayor:</strong> {$resultado['mayor']} (se repite {$resultado['repeticionesMayor']} veces)</p>";
echo "<p><strong>Número menor:</strong> {$resultado['menor']} (se repite {$resultado['repeticionesMenor']} veces)</p>";
?>

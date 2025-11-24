<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Suma de Matrices 3x3 en PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            padding: 20px;
            color: #333;
        }
        h1 {
            text-align: center;
            color: #b91c1c;
        }
        table {
            border-collapse: collapse;
            margin: 20px auto;
        }
        td {
            border: 2px solid #b91c1c;
            padding: 10px;
            text-align: center;
            width: 40px;
            height: 40px;
        }
        caption {
            font-weight: bold;
            margin-bottom: 5px;
        }
        .resultado td {
            background-color: #fee2e2;
        }
    </style>
</head>
<body>

<h1>Suma de dos matrices 3x3</h1>

<?php
// Definir matrices matrizA y matrizB

$matrizA = [
    [2, 4, 6],
    [1, 3, 5],
    [3, 5, 7]
];

$matrizB = [
    [1, 1, 1],
    [2, 2, 2],
    [3, 3, 3]
];

// Resultado de la suma de las matrices maritrizA + matrizB
$resultado = [];

// Suma de las dos matrices
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $resultado[$i][$j] = $matrizA[$i][$j] + $matrizB[$i][$j];
    }
}

// Función para mostrar una matriz en una tabla HTML
function mostrarMatriz($matriz, $titulo, $clase = "") {
    echo "<table class='$clase'>";
    echo "<caption>$titulo</caption>";
    for ($i = 0; $i < 3; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 3; $j++) {
            echo "<td>" . $matriz[$i][$j] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

//Mostrar matrices
mostrarMatriz($matrizA, "Matriz A");
mostrarMatriz($matrizB, "Matriz B");
mostrarMatriz($resultado, "Resultado de la suma de matrices");



?>

</body>
</html>
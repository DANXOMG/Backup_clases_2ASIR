<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>matrices 2</title>
</head>
<body>
    <h1>Suma de las matrices</h1>

    <?php
    // Definicion de las matrices

    $matriz1 = [
        [1, 1, 1],
        [2, 2, 2],
        [3, 3, 3]  
    ];
    $matriz2 = [
        [4, 4, 4],
        [5, 5, 5],
        [6, 6, 6]  
    ];

    // Resultado de las dos matrices
    $resultado = [];

    // Suma de las matrices
    for ($i = 0; $i < 3; $i++){
        for ($j = 0; $j < 3; $j++){
            $resultado[$i][$j] = $matriz1[$i][0] + $matriz2[$i][0];
        }
    }
    
    function mostrarmatriz($matriz, $titulo, $clase = ""){
        echo "<table class = '$clase' >"; //imprime en pantalla el inicio de la tabla html
        echo "<caption>$titulo</caption>"; // añade un titulo a la tabla html
        // Ahora recorremos las filas que va a tener nuetra "$mostrarmatriz"
        for ($i = 0; $i < 3; $i++){ // Estas son las filas (recorre las filas exteriores) // $i empieza el 0 y recorre hasta 2 (3 filas en total)
            echo "<tr>"; //abrimos una nueva fila
            for ($j = 0; $j < 3; $j++){ // Esto recorrera las columnas (recorre las columnas internas) //  $j también va de 0 a 2 (3 columnas en total)
                echo "<td>" . $matriz[$i][$j] . "</td>"; // Imprime por pantalla una celda de la tabla "<td>" donde meterá los VALORES [i][j] de la matriz que le pasemos
                // Recorre las filas y columnas de la matriz que le pasemos ej:  si $matriz[0][0]= 5 / La celda 1, en columna 1 será 5 = <td> 5</td>
            }
            echo "</tr>"; // Cerramos la fila de la tabla
        }
        echo "</table>"; // Cerramos la tabla
    }


    // mostrar matriz con la funcion

    mostrarmatriz($matriz1, "matriz 1");
    mostrarmatriz($matriz2, "matriz2");
    mostrarmatriz($resultado, "suma matriz1 + matriz2");

    ?>
























</body>
</html>
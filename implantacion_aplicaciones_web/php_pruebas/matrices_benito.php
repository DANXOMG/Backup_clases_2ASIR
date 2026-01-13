<?php 

$matrizA = [
    [2, 4, 6],
    [1, 3, 5],
    [7, 9, 11]
];  // ARRAY WOOOW X3

$matrizB = [
    [3,5,7],
    [2,4,6],
    [2,7,4]
]; // OTRA ARRAY WOOOW X3

$columnas = count($matrizA[0]);
$filas = count($matrizA);
$resultado = []; 



function rellenarmatriz($m1,$columnas,$filas){
    for ($i=0; $i < $filas; $i++) { 
        for ($j=0; $j < $columnas ; $j++) { 
            $m1[$i][$j] = "*";

        }
    } return $m1; 
};

rellenarmatriz($resultado,$columnas,$filas);
echo $resultado;

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documen</title>
</head>
<body>


<table>

<?php 
for ($i = 0; $i < count($resultado); $i++) {
    echo "<tr>";
    for ($j = 0; $j < count($resultado[$i]); $j++) {
        echo "<td>".$resultado[$i][$j]."</td>";
    }
    echo "</tr>";
}





?>

</table>

</body>
</html>
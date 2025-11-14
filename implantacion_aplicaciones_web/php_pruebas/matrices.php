<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>práctica matrices roman</title>
</head>
<body>
    
    <?php
    // hacer unas matrices que sean: ( 1 2 3 )  //  ( 1 2 3 )  ==   ( 3 4 5 )
    //                               ( 2 2 2 )  //  ( 2 2 2 )  ==   ( 3 3 3 )
    //                               ( 1 0 3 )  //  ( 1 0 1 )  ==   ( 2 0 4  )

    // Vamos a crear las matrices


    $limite = [0];

    $matriz1 = [
        [1, 2, 3],
        [2, 2, 2],
        [1, 0, 3]
    ];

    $matriz2 = [
        [2, 2, 2],
        [1, 1, 1],
        [1, 0, 1]
    ];

    // Donde haremos la matriz como resultado
    $resultado = [];

    // Suma de las dos matrices
   for ($i = 0; $i < count($matriz1); $i++) {
        for ($j = 0; $j < count($matriz1[$i]); $j++) {
            $resultado[$i][$j] = $matriz1[$i][$j] + $matriz2[$i][$j];
        }   
    }



//  Mostrar el resultado
    print_r($resultado);


        

    ?>

</body>
</html>
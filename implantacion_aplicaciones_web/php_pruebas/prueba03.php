<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci</title>
</head>
<body>
    <h1>Prueba de fibonacci limite 10</h1>
    <?php
    //Definir el limite en este caso vamos a generar 10 numeros
    $limite = 10;

    // Establecer los primeros dos numeros
    // Inicializa con los dos primeros numeros 0 y 1

    $fibonacci = [0, 1];

    // Bucle for
    // Como ya tiene los dos primeros numeros 0 y 1, empezara el indice en 2 ($i = 2)
    // Si el indice ($i) es menor que el limite que es 10 ($i < $limite)
    // 
    for ($i = 2; $i < $limite; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
      }
      //Mostrar la informacion
      echo "Los $limite primeros números de la serie de Fibonacci son:";
      foreach($fibonacci as $numero){
       echo $numero . ",";
      }



    ?>




</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dame el mayor</title>
</head>
<body>
   <?php

       /* Declaración de variables */
    $num1 = 1;
    $num2 = 4;
    $num3 = 7;
    $num4 = 9;

    $mayor = $num1;

    // condicion
     if($num2 > $mayor ){
        $mayor = $num2;
     }
     if($num3 > $mayor ){
        $mayor = $num3;
     }
     if($num4 > $mayor ){
        $mayor = $num4;
     }


    // Salida del programa 
    echo "El numero mayor es: $mayor";

   ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sentencia condicional switch</title>
</head>
<body>
    <h1>Uso de sentencia condicional switch</h1>

    <?php
    /* Declaracion de variables */
    $num = 2;

    switch ($num) {
        case 1:{
            echo "El valor de la variable num = UNO";
            break;
        }
        case 2:{
    
            echo "El valor de la variable num = DOS";
            break;
        }
        default: "El valor de la variable num, no es UNO ni DOS";
    }


</body>
</html>
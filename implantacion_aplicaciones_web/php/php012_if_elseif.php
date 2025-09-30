<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If..else</title>
</head>
<body>
    <h1>Uso de condicional IF..ELSEIF</h1>

    <?php
    /* Declaracopn de variables */
    $num = 4;
    if($num == 1){
        echo "El valor de la variable num = UNO";
    }elseif ($num == 2) {
        echo "El valor de la variable num = DOS";
    }elseif ($num == 3) {
        echo "El valor de la variable num = TRES";
    }else {
        echo "El valor de num = CUATRO";
    }

    ?>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uso de funciones de usuario</title>
</head>
<body>
    <h1>Uso de funciones de usuario</h1>

    <?php
    //Definir una función multiplica
    function multiplica($num1, $num2){
        return $num1 * $num2;
    }

    //Llamada a la funcion
    echo "La multiplicacion de los numeros 5 y 7 es: " .multiplica(5,7). "</p>";

    //Llamada a la función multiplica
    $var1 = 8;
    $var2 = 4;

    $var3 = multiplica($var1,$var2);
    echo "<p> El resultado de multiplicar $var1 por $var2 es: $var3 </p>";


    //Volumen de una piramide php
    function vol_trian($base, $altura){
        return $base * $altura / 3;
    }

    echo "<p> La base de un triangulo es 7 y la altura es 8 </p>";
    $base = 7;
    $altura = 8;

    $volumen = vol_trian($base, $altura);

    echo "<p> El resultado del volumen del triangulo es: $volumen";

    


    ?>
</body>
</html>
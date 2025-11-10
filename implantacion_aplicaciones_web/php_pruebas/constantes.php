<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constantes</title>
</head>
<body>
    <h1>Denfinicion de constantes</h1>

    <?php
    // Declaracion de constantes

    define("PI", 3.1415);
    define("LIMITE", 100);
    define("Mi_cadena", "Mi_cadena es una constante de tipo cadena" );
    define("Falso", 0);

    // Mostrar la informacion de las constantes
    
    echo "PI = constante de tipo float";
    echo "<p>". PI ."<br>";
    echo "LIMITE =  constante de tipo integer/entero";
    echo "<p>" . LIMITE . "<br>";
    echo "MI CADENA = constante de tipo string";
    echo "<p>" . Mi_cadena . "<br>";
    echo "FALSO = contsnate de tipo boolean";
    echo "<p>" . Falso . "<br>";


    // Integer constantes
    // Este tipo de constantes son para conocer las capacidades del sistema y como juega con los binarios

    echo "<p> PHP_INT_SIZE = ". PHP_INT_SIZE ."</p>";
    echo "<p> PHP_INT_MAX = ". PHP_INT_MAX ."</p>";
    echo "<p> PHP_INT_MIN = ". PHP_INT_MIN ."</p>";

    // *ESTA PARTE NO ES NECESARIA PARA EL EXAMEN*

    // Aqui unos ejemplos para entenderlo de forma mas detallada 

    //PHP_INST_SIZE = 8
    // Nos indica el numero de bytes que utiliza el sistema para almacenar un INT = 8
    // Constante	Qué representa	                Ejemplo (64 bits)
    // PHP_INT_SIZE	Tamaño de un entero en bytes    8
    // PHP_INT_MAX	Máximo valor entero posible 	9223372036854775807
    // PHP_INT_MIN	Mínimo valor entero posible 	-9223372036854775808
    
    
    // Ejemplo de overflow
    $numero = PHP_INT_MAX;

    if ($numero + 1 > PHP_INT_MAX) {
        echo "⚠️ Error: el resultado supera el tamaño máximo permitido por PHP.<br>";
    } else {
        echo $numero + 1;
    }

    // Ejemplo para saber si tu sistema es de 32 o 64 bits
    // Para entender un poco mejor como php_int_size funciona hay que pensar que juega con bits
    // Entonces si PHP_INT_SIZE = 4 bytes -> 4*(8 bits) = 32 bits
    // si PHP_INT_SIZE = 8 bytes -> 8*(8 bits) = 64 bits

    if (PHP_INT_SIZE === 8) {
        echo "Tu sistema es de 64 bits.<br>";
        } else {
        echo "Tu sistema es de 32 bits.<br>";
        }


    // Ejemplo PHP_INT_MIN 
    // PHP_INT_MIN es más de lo mismo pero con el valor mínimo que puede tener un entero en PHP
    // Ejemplo para un numero que este fuera de rango
    //$valor = 9999999999999999999; Fuera de rango
    // $valor = -86746483648; Dentro de rango
    $valor = 9999999999999999999;

    if ($valor > PHP_INT_MAX || $valor < PHP_INT_MIN) {
        echo "❌ El número está fuera del rango permitido por PHP.<br>";
    } else {
        echo "✅ El número es válido.<br>";
    }


    ?>
</body>
</html>
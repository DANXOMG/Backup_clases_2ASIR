<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Operador return </h1>
    <?php
    function suma($a, $b) {
        return $a + $b;
    }
    $resultado = suma(5, 10);
    echo "El resultado de la suma es: $resultado";
    ?>
</body>
</html>
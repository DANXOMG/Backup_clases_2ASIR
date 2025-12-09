<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     
    <h1>Operador idéntico </h1>
    <?php
    $a = 5;          // Entero
    $b = "5";       // Cadena

    if ($a === $b) {
        echo "Las variables \$a y \$b son idénticas.";
    } else {
        echo "Las variables \$a y \$b  no son idénticas.";
    }
    ?>
</body>
</html>
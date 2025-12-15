<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Uso de sentencia do while en PHP</h1>

    <?php

    // Pintar los 20 primero números

    $indice = 1;
    do {
        echo "$indice <br>";
        $indice = $indice + 1;
    } while ($indice <= 20);
    ?>
</body>
</html>
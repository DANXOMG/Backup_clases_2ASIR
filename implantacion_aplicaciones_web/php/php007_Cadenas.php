<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uso de cadenas</title>
</head>
<body>
    <h1>Uso de cadenas en PHP</h1>

    <?php
    // Declaracion de variables

    $nombre = "Federico";
    $saludo = "Hola $nombre <br>";
    $saludo2 = "Hola ". $nombre ."<br>";
    $saludo3 = "Hola ". $nombre ."<br>";
    $saludo4 = "Hola $nombre ";

    echo "$saludo";
    echo "---------->";

    ?>
    
</body>
</html>
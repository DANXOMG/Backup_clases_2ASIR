<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays limites</title>
</head>
<body>
    <h1>Uso de un Array sin claves</h1>
    <?php
    $arr = array(10,20,30,40,50);
    print_r($arr);

    $arr[] = 5;
    echo"<br>";
    print_r($arr);

    echo"<br>";

    $arr[10] = 6;
    print_r($arr);

    echo "<br>";


    foreach ($arr as $valor) {
    echo $valor." ";
    }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array inverso</title>
</head>
<body>
    <h1>Array inverso</h1>

    <?php
    function array_inverso($array){
        return array_reverse($array);
    }

    $array = [1, 4, 6, 8, 10];
    $arrayinvertido = array_inverso($array);
    echo "Este es mi array: $array, y este es mi array inverso: ";

    print_r($arrayinvertido);
    ?>

</body>
</html>
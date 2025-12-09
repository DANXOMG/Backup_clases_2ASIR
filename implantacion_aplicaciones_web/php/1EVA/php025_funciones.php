<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones Predefinidas</title>
</head>
<body>
    <h1>Uso de funciones predefinidas php</h1>

    <?php
    //Declaracion de variables

    $var1 = 4;
    $var2 = NULL;
    $var3 = false;
    $var4 = 0;
    $var5 = 2;


    echo "VAR1 <br>";
    echo "isset: ";
    var_dump(isset($var1)); echo "<br>";
    var_dump(is_null($var1)); echo "<br>";
    var_dump(empty($var1)); echo "<br>";

    echo "<br>";

    echo "VAR2 <br>";
    echo "isset: ";
    var_dump(isset($var2)); echo "<br>";
    var_dump(is_null($var2)); echo "<br>";
    var_dump(empty($var2)); echo "<br>";

    echo "<br>";

    echo "VAR3 <br>";
    echo "isset: ";
    var_dump(isset($var3)); echo "<br>";
    var_dump(is_null($var3)); echo "<br>";
    var_dump(empty($var3)); echo "<br>";
    
    echo "<br>";

    echo "VAR4 <br>";
    echo "isset: ";
    var_dump(isset($var4)); echo "<br>";
    var_dump(is_null($var4)); echo "<br>";
    var_dump(empty($var4)); echo "<br>";
    
    echo "<br>";

    echo "VAR5 <br>";
    echo "isset: ";
    var_dump(isset($var5)); echo "<br>";
    var_dump(is_null($var5)); echo "<br>";
    var_dump(empty($var5)); echo "<br>";

    ?>



</body>
</html>
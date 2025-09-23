<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asignacion por copia y por referencia</title>
</head>
<body>
    <h1>Asignacion por copia y referencia</h1>
    <?php 
    
    $var1 = 100;
    $var2 = &$var1; //Asignacion por referencia
    $var3 = &$var1; //Asignacion por copia
    echo "<p>var2 = $var2</p>";
    $var2 = 300;
    echo "<p>var3 = $var2</p>";
 
    $var3 = 400;
    echo "<p>var1 = $var1</p>";
    echo "<p>var2 = $var2</p>";
    echo "<p>var3 = $var3</p>";

    ?>
    
</body>
</html>
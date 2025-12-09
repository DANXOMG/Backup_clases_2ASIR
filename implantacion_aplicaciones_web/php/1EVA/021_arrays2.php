<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Recorrer Arrays</h1>

    <?php
    //crear array
    $array_2 =array(
        "1111A" => "Juan sin miedo",
        "1112A" => "Federico Bamontes",
        "1113A" => "Miguel Indurian",
        "1114A" => "Pedro Delgado"
    );
    
    echo "<br>";
    echo "<h3> Uso 1 : Recorrer valores</h3>";
    foreach($array_2 as $nombre){
        echo "".$nombre."<br>";
    }
     echo "<h3> Uso 1 : Recorrer valores y además su clave</h3>";
     foreach($array_2 as $codigo => $nombre){
        echo "Código: ".$codigo.    " Nombre: ".$nombre."<br>";
    }

   ?>
</body>
</html>
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
        "Viernes" => 22,
        "Sabado" => 44,
        "Domingo" => 55
    );
  
   echo "<br>";
    echo "<h3> Uso 1 : Recorrer valores</h3>";
    foreach($array_2 as $valor){
        $valor = $valor + 2;
    }
  echo "<br>";
  echo "<h3> Uso 2 : Recorrer valores con referencia</h3>";
  print_r($array_2);

     foreach($array_2 as &$valor){
        $valor = $valor + 2;
    }
    
    echo "<br>";
    print_r($array_2);
    
   ?>
</body>
</html>
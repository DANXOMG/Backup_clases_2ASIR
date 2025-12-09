<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAY IDENTICO</title>
</head>
<body>
    <h1>Uso de operador array identico</h1>
    <?php
    $arr1 = array(
        1 => "3000",
        2 => "4000");
    
    $arr2 = array(
        1 => 3000,
        2 => 4000);

    $arr3 = array(
        2 => "3000",
        1 => "4000");

    print_r($arr1);
    print_r($arr2);
    print_r($arr3);
    echo "<br>";

        //comparaciones igualdad

   if ($arr1 === $arr2){
       echo "\$arr1 es igual a \$arr2 <br>";
   }
   else{
       echo "\$arr1 no es igual a \$arr2 <br>";
    }

    if ($arr1 === $arr3){
       echo "\$arr1 es igual a \$arr3 <br>";
   }
   else{
       echo "\$arr1 no es igual a \$arr3 <br>";
    }


    //Comparaciones identicos

    if ($arr1 === $arr2){
       echo "\$arr1 es identico a \$arr2 <br>";
   }
   else{
       echo "\$arr1 no es identico a \$arr2 <br>";
    }

    if ($arr1 === $arr3){
       echo "\$arr1 es identico a \$arr3 <br>";
   }
   else{
       echo "\$arr1 no es identico a \$arr3 <br>";
    }
    ?>



</body>
</html>
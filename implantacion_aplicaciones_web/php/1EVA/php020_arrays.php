<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays en php</title>
</head>
<body>
    <h1>Uso de arrays en php</h1>

    <?php

        //Definicion de array1

        $arr1 = [
            0 => 444,
            1 => 333,
            2 => 888,
        ];

        print_r($arr1);

        //Asignacion a una celda 
        $arr1[0] = 555;

        print_r($arr1);

        echo "<br>";


        //Crear array con claves
        $arr2 = array(
            "111A" => "Juan sin miedo",
            "112A" => "Miguel Indurain",
            "113A" => "Carlos Latre",
            "114A" => "Pepe Viyuela"
        );
        print_r($arr2);
    ?>

</body>
</html>
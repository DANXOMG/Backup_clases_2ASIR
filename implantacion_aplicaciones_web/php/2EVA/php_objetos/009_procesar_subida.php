<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    //Tamaño máximo permitido (en bytes)
    $tam = $_FILES["fichero"]['size'];

    if($tam < 256 * 1024){
        echo "Demadiado grande";
        return;
    }

    echo "<p>Nombre de fichero Original: " .$_FILES["fichero"]["name"] . "</p>";

    echo "Nombre de fichero temporal: " .$_FILES["fichero"]["tmp_name"];
    $res = move_uploaded_file($_FILES["fichero"]["tmp_name"], "subidos/" . $_FILES["fichero"]["name"]);

    if($res){
        echo "Fichero subido correctamente";
    } else {
        echo "Error al subir el fichero";
    }

}
















?>
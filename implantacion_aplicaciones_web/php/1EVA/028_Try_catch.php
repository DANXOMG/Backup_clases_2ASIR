<?php
    // Declaracion de Funciones
    function dividir($a, $b) {
        if ($b == 0){
            throw new Exception('El segundo argumento es cero.');
        }
        return $a/$b;
    }


    try{
        $resultado1 = dividir(5, 0);
        echo "resultado1 = $resultado1 <br>";
    }catch(Exception $e){
        echo "Exception: ". $e->getMessage(). "<br>";
    }finally{
        echo "Primer finally <br>";
    }

    try{
        $resultado2 = dividir(10, 2);
        echo "resultado 2 = $resultado2 <br>";
    }catch(Exception $e){
        echo "Exception: ". $e->getMessage(). "<br>";
    }finally{
        echo "Segundo finally <br>";
    }


?>





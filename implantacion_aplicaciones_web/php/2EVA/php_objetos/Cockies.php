<?php

if (!isset($_COOKIE["visitas"])) {
    // La cookie no existe
    setcookie("visitas", 1, time() + 3600 *24); // Cookie válida por 1 hora
    echo "Bienvenido por primera vez...";
} else {
    // La cookie ya existe
    $visitas = (int)$_COOKIE["visitas"];
    $visitas++;
    setcookie("visitas", 1, $visitas, time() + 3600*24); // Actualiza la cookie
    echo "Bienvenido por ". $visitas ."vez a la pagina...";
}






?>
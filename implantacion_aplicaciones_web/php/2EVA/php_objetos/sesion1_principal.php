<?php
session_start();
if (!isset($_SESSION["usuario"])){
    header("Location: sesion1_login.php?redirigido=true");
    exit();
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina principal</title>
</head>
<body>
    <h1>Pagina Principal</h1>
    <h3>Informacion de la sesion</h3>
    <?php echo "<p>Session Name: " . session_name(). "</p>"; ?>
    <?php echo "<p>Session ID: " . session_id(). "</p>"; ?>
    <?php echo "<p>Session Status: " . session_status(). "</p>"; ?>
    <?php echo "<p>Bienvenido: " . $_SESSION["usuario"] . " ...... </p>"; ?>
    <p>
        <a href="sesion1_logout.php">Cerrar Sesion</a>
    </p>
</body>
</html>
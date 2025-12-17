<?php
// Datos del formulario
function comprobar_usuario($nombre, $clave){
    if($nombre == "usuario" and $clave == "1234"){
        $usuario["nombre"] = "usuario";
        $usuario["rol"] = 0; 
        return $usuario;
    }else if ($nombre == "admin" and $clave == "1234"){
        $usuario["nombre"] = "admin";
        $usuario["rol"] = 1; 
        return $usuario;

    }else return false;
}



if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $usuario = comprobar_usuario($_POST['usuario'], $_POST["clave"] );
    if ($usuario == false){
        $err = true;
        $usuario = $_POST["usuario"];
    }else{
        session_start();
        $_SESSION["usuario"] = $_POST["usuario"];
        header("Location: sesion1_principal.php");
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Login</title>
</head>
<body>

    <h1>Formulario Login.</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <p>
            <label for="Usuario">Usuario: </label>
            <input type="text" name="usuario" id="usuario">
        </p>
        <p>
            <label for="Clave">Clave: </label>
            <input type="password" name="clave" id="clave">
        </p>
        <p>
            <input type="submit" value="Enviar">
        </p>
    </form>




    
</body>
</html>
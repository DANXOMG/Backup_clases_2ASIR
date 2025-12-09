<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subida de ficheros</title>
</head>
<body>
    <h1>Procesamineto de la subida de un fichero</h1>

    <form action="009_procesar_subida.php" method="post" enctype="multipart/form-data">
        <p>Elija fichero: </p>
        <p><input type="file" name="file" id="file"></p>
        <p><input type="submit" value="Subir fichero"></p>
    </form>
</body>
</html>
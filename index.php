<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Git-Standard</title>
</head>
<body>
    <h2>Pequeña API para guardar notas (Standard)</h2>
    <p>Escribe aquí tus notas y las guardaremos en un fichero notas.txt</p>
    <form action="notas.php" method="post">
        <textarea name="nota" rows="4" cols="50" placeholder="Ingresa tu nota aquí"></textarea>
        <br>
        <input type="submit" value="Guardar Nota">
    </form>
    <br><br>
    <h3>Notas Guardadas:</h3>
    <h4>Aquí presentamos todas tus notas guardadas</h4>
    <div id="notas">
        <?php include 'notas.txt'; ?>
    </div>
</body>
</html>
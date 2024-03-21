<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen final</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h2>Pequeña API para guardar notas</h2>
    <textarea id="nota" name="nota" rows="4" cols="50" placeholder="Ingresa tu nota aquí"></textarea>
    <br>
    <button id="guardarNota">Guardar nota</button>

    <br><br>

    <h3>Notas Guardadas:</h3>
    <div id="notas">
        <!-- Aquí se escribirán las notas guardadas con Ajax -->
    </div>

    <script>
        // Usamos AJAX con JQuery para la comunicación con el servidor
        // Cuando el documento esté preparado, iniciamos la función
        $(document).ready(function(){
            // Cuando se haga click en el botón de guardar, se iniciará la comunicación con el servidor
            $("#guardarNota").click(function(){
                // Toma la nota escrita en el área de texto
                let nota = $("#nota").val();
                // Envía un POST al servidor con el parámetro: "nota"
                $.post("notas.php",
                {
                    nota: nota
                },
                // Una segunda función nos da la información que devuelve el servidor y su estatus
                function(data, status){
                    if (status == 500) {
                        console.log("Error al recibir la respuesta");
                    } else {
                        $("#notas").append("<p>" + data + "</p>"); // Agregar la nota al final
                        $("#nota").val(""); // Limpiar el textarea después de guardar
                    }
                   
                });
            });
        });
    </script>
</body>
</html>

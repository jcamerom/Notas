<?php
    // Autor: Juan Camero Muñoz

    // Si el servidor recibe un POST y no está vacío
    if(isset($_POST['nota']) && !empty($_POST['nota'])){
        // Tomamos los datos necesarios
        $nota = $_POST['nota'];
        $fecha = date("Y-m-d H:i:s"); // Obtiene la fecha y hora actual

        // Guarda un nuevo contenido en el fichero notas.txt
        $file = 'notas.txt';
        $content = $fecha.": ".$nota.PHP_EOL;
        
        // Si al guardar el contenido en el fichero tenemos éxito, enviará un status correcto
        if (file_put_contents($file, $content, FILE_APPEND) != false) {
            http_response_code(200);
            // Retorna la nota con la fecha para ser mostrada en la página
            echo "<p>$fecha: $nota</p>";
        } else {
            // Si ocurre algún error al guardar la nota, devuelve un mensaje de error
            http_response_code(500);
        };

    }
?>
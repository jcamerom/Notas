<?php
    // Autor: Juan Camero Muñoz

    header("Location: index.php");

    if(isset($_POST['nota']) && !empty($_POST['nota'])){
        $nota = $_POST['nota']; 
        $fecha = date("Y-m-d H:i:s"); // Obtiene la fecha y hora actual

        // Abrimos el archivo, guardamos el contenido, escribimos en él y lo cerramos
        $archivo = fopen("notas.txt", "a");
        $content = $fecha.": ".$nota."<br>";
        fwrite($archivo, $content.PHP_EOL);
        fclose($archivo);
    }

    // Tras guardar en el archivo, lo abrimos y cogemos cada nota para escribirlas en el div con id="notas"
    $notas = file('notas.txt');
        foreach ($notas as $nota) {
        echo $nota."<br>";
    }
?>
?>
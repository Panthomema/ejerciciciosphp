<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 7 PHP</title>
    </head>
    <body>
        <?php
            
            $participantes = array('Argentina', 'Australia', 'Nueva Zelanda', 'Sudáfrica');
        
            echo "<p>", "Participantes del Torneo de las 4 Naciones", "</p>";
            echo "<ul>";
            foreach ($participantes as $participante) {
                echo "<li>", $participante, "</li>";
            }
            echo "</ul>";
        ?>
    </body>
</html>
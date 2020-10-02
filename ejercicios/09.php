<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 9 PHP</title>
    </head>
    <body>
        <?php
            
            $participantes;
            $participantes[] = 'Australia';
            $participantes[] = 'Nueva Zelanda';
            $participantes[] = 'Sudáfrica';
        
            echo "<p>", "Participantes del antiguo Torneo de las 3 Naciones", "</p>";
            echo "<ul>";
            foreach ($participantes as $participante) {
                echo "<li>", $participante, "</li>";
            }
            echo "</ul>";

            $participantes[0] = 'Argentina';
            $participantes[1] = 'Australia';
            $participantes[2] = 'Nueva Zelanda';
            $participantes[3] = 'Sudáfrica';
            

            echo "<p>", "Participantes del Torneo de las 4 Naciones", "</p>";
            echo "<ul>";
            foreach ($participantes as $participante) {
                echo "<li>", $participante, "</li>";
            }
            echo "</ul>";
        ?>
    </body>
</html>
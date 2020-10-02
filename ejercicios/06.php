<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 6 PHP</title>
    </head>
    <body>
        <?php
            $players = ['Allen Iverson', 'Tracy McGrady', 'Vince Carter', 'Kevin Garnett', 'Shaquille O\'Neal'];
            $jugadores = array('Jose Manuel Calderón', 'Juan Carlos Navarro', 'Jorge Garbajosa', 'Pau Gasol', 'Marc Gasol');
            
            echo "<p>", "Quinteto fantasioso Estados Juntitos", "</p>";
            echo "<ul>";
            foreach ($players as $player) {
                echo "<li>", $player, "</li>";
            }
            echo "</ul>";

            echo "<p>", "Quinteto fantasioso Hispania", "</p>";
            echo "<ul>";
            foreach ($jugadores as $clave => $jugador) {
                echo "<li>", $clave, ": ", $jugador, "</li>";
            }
            echo "</ul>";
        ?>
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 8 PHP</title>
    </head>
    <body>
        <?php
            $players;
            $players[] = 'Allen Iverson';
            $players[] = 'Tracy McGrady';
            $players[] = 'Vince Carter';
            $players[] = 'Kevin Garnett';
            $players[] = 'Shaquille O\'Neal';

            $jugadores;
            $jugadores[0] = 'Jose Manuel Calderón';
            $jugadores[1] = 'Juan Carlos Navarro';
            $jugadores[2] = 'Jorge Garbajosa';
            $jugadores[3] = 'Pau Gasol';
            $jugadores[4] = 'Marc Gasol';
            
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
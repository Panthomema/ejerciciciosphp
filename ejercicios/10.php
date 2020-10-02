<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 10 PHP</title>
    </head>
    <body>
        <?php
            $players;
            $players['BASE'] = "Allen Iverson";
            $players['ESCOLTA'] = "Tracy McGrady";
            $players['ALERO'] = "Vince Carter";
            $players['ALA-PÍVOT'] = "Kevin Garnett";
            $players['PÍVOT'] = "Shaquille O\'Neal";

            $jugadores;
            $jugadores['BASE'] = "Jose Manuel Calderón";
            $jugadores['ESCOLTA'] = "Juan Carlos Navarro";
            $jugadores['ALERO'] = "Jorge Garbajosa";
            $jugadores['ALA-PÍVOT'] = "Pau Gasol";
            $jugadores['PÍVOT'] = "Marc Gasol";
            
            echo "<p>", "Quinteto fantasioso Estados Juntitos", "</p>";
            echo "<ul>";
            foreach ($players as $clave => $player) {
                echo "<li>", $clave, ": ", $player, "</li>";
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
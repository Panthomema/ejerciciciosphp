<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 3 PHP</title>
    </head>
    <body>
        <?php 
        print "<h1 font-size: 12px>Números divisibles por 3 (1- 10)</h1>";
        print "<p>";

        for ($number=1; $number <= 10; $number++) { 
            if ($number % 3 == 0) {
                echo $number, ", ";
            }
        }
        print "</p>";
        ?>
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 4 PHP</title>
    </head>
    <body>  
        <?php
        $previous = 0;
        $next = 1;

        for ($number = 1; $number <= 10; $number++) {
            $screen = $previous + $next;
            $previous = $next;

            echo $screen, " ";

            $next = $screen;          
        }
        ?>
    </body>
</html>
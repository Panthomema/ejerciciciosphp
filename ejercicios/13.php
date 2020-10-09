<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 13 PHP</title>
    </head>
    <body>
        <form method="post" action="">
            <label>Nombre </label>
            <input type="text" value="" name="nombre">
            <input type="submit" value="Enviar">
        </form>

        <?php 
            do {
                echo '<form method="post" action="">
                <label>Nombre </label>
                <input type="text" value="" name="nombre">
                </form>';
            } while (empty($_POST));          
        ?>
        
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "Te envío un saludo, ", $_COOKIE['user'], ". Has de saber que tu sesión está iniciada.";
    ?>
    <br>
    <a href="http://ejercicios.local/ejercicios/18/?method=login">Cerrar Sesión</a>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 PHP</title>
    <style>
        table, tr, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <?php
        $nombre = "Antonio";
        $apellido1 = "Monge";
        $apellido2 = "Coronas";
        $edad = 25;
        $telefono1 = 65068228;
        $telefono2 = 976357269;
        $email = "antoniomc.prof@gmail.com";
        $direccion = "Vía Ibérica, Nº 2, Blq 1, Esc 2ª, 7º A";
    ?>
    <table>
        <tr>
            <td>Nombre</td>
            <td><?php echo $nombre ?></td>
        </tr>
        <tr>
            <td>Apellidos</td>
            <td><?php print "$apellido1 $apellido2" ?></td>
        </tr>
        <tr>
            <td>Edad</td>
            <td><?php echo $edad ?></td>
        </tr>
        <tr>
            <td>Teléfono</td>
            <td><?php print $telefono1 . ', ' . $telefono2 ?></td>
        </tr>
        <tr>
            <td>E-mail</td>
            <td><?php echo $email ?></td>
        </tr>
        <tr>
            <td>Dirección</td>
            <td><?php print $direccion ?></td>
        </tr>
    </table>
    
</body>
</html>

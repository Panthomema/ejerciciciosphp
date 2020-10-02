<?php
    if (isset($_GET) && !empty($_GET)) {
        echo "¡Oh sí! Muchas Gracias...Un saludo, $_GET[nombre]";
    } else {
        echo "Esto es serio. Dime tu nombre.";
    }

?>
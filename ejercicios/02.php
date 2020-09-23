<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 2 PHP</title>
    </head>
    <body>
        <?php 
        const NUMBER = 8;
        echo "<table border = 1>"; 
        

        for ($row = 1; $row <= 10; $row++) { 
            if ($row % 2 == 0) {
                echo "<tr bgcolor = #66FF66>";
            } else {
                echo "<tr bgcolor = #FF99FF>";
            }
   
            echo "<td>", NUMBER, " x ", $row, " = ", "</td>";
            echo "<td>", NUMBER * $row, "</td>";
            
        }

        echo "</table>";
        ?>
    </body>
</html>
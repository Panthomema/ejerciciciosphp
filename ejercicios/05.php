<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 5 PHP</title>
    </head>
    <body>
        <?php
            const NUMBER = 169;
            echo "DIVISORES DEL " , NUMBER , ": ";
            
            $contdiv = 0;

            for ($i = 1; $i <= NUMBER; $i++) { 
                if (NUMBER % $i == 0) {
                    print "$i";
                    $contdiv++;

                    if ($i != NUMBER) {
                        print ", ";
                    } else {
                        print ". ";
                    }
                }
            }

            print "En consecuencia, afirmaremos que ";

            if ($contdiv > 2) {
                print  NUMBER . " tiene más de 2 divisores, por lo que no es primo.";
            } else {
                print  NUMBER . " es primo. Sólamente es divisible por sí mismo y 1.";
            }
        ?>
        
        <p>--------------------------</p>

        <?php
            const NUMBER2 = 193;
            echo "DIVISORES DEL " , NUMBER2, ": ";
            
            $contdiv = 0;

            for ($i = 1; $i <= NUMBER2; $i++) { 
                if (NUMBER2 % $i == 0) {
                    print "$i";
                    $contdiv++;

                    if ($i != NUMBER2) {
                        print ", ";
                    } else {
                        print ". ";
                    }
                }
            }

            print "En consecuencia, afirmaremos que ";

            if ($contdiv > 2) {
                print  NUMBER2 . " tiene más de 2 divisores, por lo que no es primo.";
            } else {
                print  NUMBER2 . " es primo. Sólamente es divisible por sí mismo y 1.";
            }
        ?>
    </body>
</html>
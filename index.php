<!DOCTYPE html>
<html>
    <head>
         <meta charset="UTF-8">
         <title></title>
    </head>
    <body>
        <?php

            require_once 'Lutador.php';
            require_once 'Luta.php';
            $l = array();
            $l[0] = new Lutador("Graciela", "Leon-Espana y muy Gañana", 31, 60.3, 1.61, 20, 2, 3);
            $l[1] = new Lutador("Andre", "Brasileira", 33, 61.2, 1.79, 22, 1, 2);

            $UEC01 = new Luta();
            $UEC01->marcarLuta($l[0], $l[1]);
            $UEC01->lutar();
            $l[0]->status();
            $l[1]->status();

        ?>
    </body>
</html>

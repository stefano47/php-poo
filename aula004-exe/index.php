<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
                require_once 'Fone.php';
                $f1 = new Fone("MD1", "Verde");
                print_r($f1);
                $f1->ligar();
                $f1->aumentarVolume();
                $f1->aumentarVolume();
                $f1->aumentarVolume();
                $f1->aumentarVolume();
                $f1->aumentarVolume();
                $f1->aumentarVolume();
                print_r($f1);
                $f1->baixarVolume();
                $f1->baixarVolume();
                print_r($f1);
                $f1->desligar();
                $f1->aumentarVolume();
                print_r($f1);
                $f1->baixarVolume();
                print_r($f1);
            ?>
        </pre>
    </body>
</html>

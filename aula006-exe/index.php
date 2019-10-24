<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Projeto Fone Bluetooh</h1>
        <pre>
            <?php
                require_once 'FoneBluetooh.php';
                $f1 = new FoneBluetooh();
                $f1->ligar();
                $f1->status();
                echo "<p>------------------------------------------------------</p>";
                $f1->desligar();
                $f1->status();
                echo "<p>------------------------------------------------------</p>";
                $f1->recarregar();
                $f1->ligar();
                $f1->play();
                $f1->aumentarVolume();
                $f1->aumentarVolume();
                $f1->aumentarVolume();
                $f1->aumentarVolume();
                $f1->aumentarVolume();
                $f1->aumentarVolume();
                $f1->aumentarVolume();
                $f1->aumentarVolume();
                $f1->aumentarVolume();
                $f1->status();
            ?>
        </pre>
    </body>
</html>

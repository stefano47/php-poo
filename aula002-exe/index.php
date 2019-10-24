<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Criando Classes e Objetos em PHP</title>
    </head>
    <body>
        <pre>
            <?php
               require_once 'Fone.php';

               $f1 = new Fone;
               $f1->volume = 20;
               $f1->cor = "Verde";
               $f1->bluetooh = false;
               $f1->carga = 70;
               
               print_r($f1);
               
               $f1->ligar();
               print_r($f1);
               
               # $f1->ligarBluetooh();
               $f1->conectarComBluetooh();
               print_r($f1);
               $f1->conectarComBluetooh();
               $f1->aumentaVolume();
               $f1->aumentaVolume();
               $f1->aumentaVolume();
               $f1->aumentaVolume();
               $f1->aumentaVolume();
               $f1->aumentaVolume();
               $f1->aumentaVolume();
               $f1->aumentaVolume();
               $f1->aumentaVolume();
            ?>
        </pre>
    </body>
</html>

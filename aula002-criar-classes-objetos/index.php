<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Criando Classes e Objetos em PHP</title>
    </head>
    <body>
        <pre>
            <?php
                require_once 'Caneta.php';
                # instânciando um Objeto Caneta
                $c1 = new Caneta;
                $c1->cor = "Azul";
                $c1->ponta = 0.5;
                $c1->tampada = false;
                
                $c1->tampar();
                $c1->destampar();
                
                $c1->rabiscar();
                
                print_r($c1);
                
                # instânciando outro Objeto Caneta
                $c2 = new Caneta;
                $c2->cor = "Verde";
                $c2->carga = 50;
                
                $c2->tampar();
                
                print_r($c2);
            ?>
        </pre>
    </body>
</html>
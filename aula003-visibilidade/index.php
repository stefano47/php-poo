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
                $c1->modelo = "Bic Cristal";
                $c1->cor = "Azul";
                # $c1->ponta = 0.5; [ERRO]
                # $c1->carga = 99; [ERRO]
                # $c1->tampada = true; [ERRO]
                print_r($c1);
                $c1->rabiscar();
                # $c1->tampar();
                $c1->rabiscar();
                print_r($c1);
                $c1->escrever();
                print_r($c1);
                $c1->escrever();
                $c1->escrever();
                $c1->escrever();
                $c1->escrever();
                $c1->escrever();
                $c1->escrever();
                $c1->escrever();
                $c1->escrever();
                $c1->rabiscar();
                $c1->escrever();
                print_r($c1);
            ?>
        </pre>
    </body>
</html>

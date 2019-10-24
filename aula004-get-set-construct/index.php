<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Métodos GET/SET e CONSTRUCT</title>
    </head>
    <body>
        <pre>
            <?php
                require_once 'Caneta.php';
                # instânciando um objeto e passando parâmetros para o método construtor
                $c1 = new Caneta("Bic Cristal", "Vermelha", 0.5);
                print_r($c1);
            ?>
        </pre>
    </body>
</html>

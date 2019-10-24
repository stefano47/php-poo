<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
                require_once 'Conta.php';
                $c1 = new Conta();
                $c1->abrirConta("cc");
                $c1->setNumConta(1);
                $c1->setDono("Jubileu");
                $c1->depositar(300);
                $c1->pagarMensal();
                print_r($c1);
                echo "<p>---------------------------------------------------</p>";
                $c2 = new Conta();
                $c2->abrirConta("cp");
                $c2->setNumConta(2);
                $c2->setDono("Creusa");
                $c2->depositar(500);
                $c2->pagarMensal();
                $c2->sacar(100);
                print_r($c2);
                $c2->sacar(5000);
            ?>
        </pre>
    </body>
</html>

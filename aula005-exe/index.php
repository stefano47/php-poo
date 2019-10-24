<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
                require_once 'ContaBanco.php';
                $c1 = new ContaBanco();
                print_r($c1);
                $c1->abrirConta("cp");
                print_r($c1);
                $c1->depositar(500);
                print_r($c1);
                $c1->sacar(70);
                print_r($c1);
                $c1->pagarMensal();
                print_r($c1);
                $c1->sacar(700);
                
                echo "<br>---------------------------------------------------------------------------------------------------<br>";
                
                $c2 = new ContaBanco();
                $c2->setNumConta(2);
                $c2->setDono("Pedro");
                $c2->abrirConta("cc");
                print_r($c2);
                $c2->depositar(100);
                $c2->pagarMensal();
                print_r($c2);
                $c2->sacar(130);
                print_r($c2);
                $c2->sacar(50);
                $c2->fecharConta();
                $c2->sacar(8);
                $c2->fecharConta();
                $c2->fecharConta();
                print_r($c2);
                $c2->depositar(50);
                print_r($c2);
                $c2->sacar(500);
            ?>
        </pre>
    </body>
</html>

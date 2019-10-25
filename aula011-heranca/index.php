<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
               require_once 'Visitante.php';
               require_once 'Aluno.php';
               require_once 'Bolsista.php';
               require_once 'Tecnico.php';
               
               $v1 = new Visitante();
               $a1 = new Aluno();
               $b1 = new Bolsista();
               $t1 = new Tecnico();
               
               $v1->setNome("Juvenal");
               $v1->setIdade(33);
               $v1->setSexo("Masculino");
               
               $a1->setNome("Pedro");
               $a1->setIdade(16);
               $a1->setSexo("Masculino");
               $a1->setMatricula(1111);
               $a1->setCurso("Informática");
               
               $b1->setNome("Gabriela");
               $b1->setIdade(13);
               $b1->setSexo("Feminino");
               $b1->setMatricula(1112);
               $b1->setCurso("Logística");
               $b1->setBolsa(12.5);
               
               print_r($v1);
               $a1->pagarMensalidade();
               # $a1->fazerAniversario();
               print_r($a1);
               $b1->pagarMensalidade();
               print_r($b1);
            ?>
        </pre>
    </body>
</html>

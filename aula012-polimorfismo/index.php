<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
                # mamíferos
                require_once 'Mamifero.php';
                require_once 'Canguru.php';
                require_once 'Cachorro.php';
                
                # répteis
                require_once 'Reptil.php';
                require_once 'Cobra.php';
                require_once 'Tartaruga.php';
                
                # peixes
                require_once 'Peixe.php';
                require_once 'Goldfish.php';
                
                # aves
                require_once 'Ave.php';
                require_once 'Arara.php';
                
                $m = new Mamifero();
                print_r($m);
                
                $cag = new Canguru();
                $cag->locomover();
                
                $cac = new Cachorro();
                $cac->locomover();
                $cac->emitirSom();
                
                $t = new Tartaruga();
                $t->locomover();
                
                $gf = new Goldfish();
                $gf->locomover();
                $gf->emitirSom();
                
                $ara = new Arara();
                $ara->locomover();
                $ara->alimentar();
            ?>
        </pre>
    </body>
</html>

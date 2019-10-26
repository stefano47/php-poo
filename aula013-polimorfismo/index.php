<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
                require_once 'Mamifero.php';
                require_once 'Lobo.php';
                require_once 'Cachorro.php';
                
                $m = new Mamifero();
                $m->emitirSom();
                $l = new Lobo();
                $l->emitirSom();
                $c = new Cachorro();
                $c->emitirSom();
                $c->reagirFrase("vai apanhar");
                $c->reagirIdadePeso(4, 1.5);
                $c->setDono("Stefano");
                $c->reagirDono("Stefano");
            ?>
        </pre>
    </body>
</html>

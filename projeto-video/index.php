<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
                require_once 'Video.php';
                require_once 'Gafanhoto.php';
                require_once 'Visualizacao.php';
                
                #$v[0] = new Video("Aula 1 de POO");
                $v[1] = new Video("Aula 12 de PHP");
                $v[2] = new Video("Aula 15 de HTML5");
                
                $g[0] = new Gafanhoto("Stefano", 22, "M", "st3");
                $g[1] = new Gafanhoto("Pedro", 27, "M", "pedrita");
                
                $vis[0] = new Visualizacao($g[0], $v[2]);
                $vis[1] = new Visualizacao($g[0], $v[1]);
                $vis[2] = new Visualizacao($g[1], $v[1]);
                
                $vis[0]->avaliar();
                
                print_r($v);
                print_r($g);
                print_r($vis);
            ?>
        </pre>
    </body>
</html>
